<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require('vendor/autoload.php');
include("koneksi.php");

use Rakit\Validation\Validator;

if ($_POST['type'] == 'simpan_data_balita') {
    store_data_balita();
    exit;
} elseif ($_POST['type'] == 'check_nik') {
    $check_nik = check_nik();
    echo json_encode($check_nik);
} elseif ($_POST['type'] == 'hitung_usia') {
    hitung_usia();
}
function store_data_balita()
{
    $validator = new Validator([
        'required' => ':attribute harus diisi',
        'email' => ':email tidak valid',
        'numeric' => ':data harus berupa angka'
        // etc
    ]);
    $validation = $validator->validate($_POST, [
        'nik' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'nama_orang_tua' => 'required',
        'kecamatan' => 'required',
        'alamat' => 'required',
        'bb_lahir' => 'required|numeric',
        'tb_lahir' => 'required|numeric',
        'tanggal_pengukuran' => 'required',
        'usia_saat_diukur' => 'required',
        'berat_badan' => 'required',
        'tinggi_badan' => 'required',
        'tanggal_pengukuran' => 'required',
    ]);
    if ($validation->fails()) {
        $errors = $validation->errors();
        $response = [
            'status' => 'validation_failed',
            'msg' => $errors->firstOfAll(),
        ];
    } else {
        $check_nik = check_nik();
        if ($check_nik['status'] == true) {
            $response = [
                'status' => false,
                'msg' => $check_nik['msg']
            ];
        } else {
            $nama = $_POST['nama'];
            $nik = $_POST['nik'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $nama_orang_tua = $_POST['nama_orang_tua'];
            $kecamatan = $_POST['kecamatan'];
            $alamat = $_POST['alamat'];
            $bb_lahir = $_POST['bb_lahir'];
            $tb_lahir = $_POST['tb_lahir'];
            $tanggal_pengukuran = $_POST['tanggal_pengukuran'];
            $usia_saat_diukur = $_POST['usia_saat_diukur'];
            $berat_badan = $_POST['berat_badan'];
            $tinggi_badan = $_POST['tinggi_badan'];
            $tanggal_pengukuran = $_POST['tanggal_pengukuran'];
            $status_tinggi = 1;
            $status_berat = 1;
            $status_gizi = 1;
            $fuzzy = json_encode(['data' => 1]);
            $query_insert = "INSERT INTO table_data_balita (nik,nama,jenis_kelamin,tgl_lahir,nama_ortu,bb_lahir,tb_lahir,alamat,kecamatan,usia_saat_ukur,tgl_pengukuran,tinggi,berat,status_tinggi,status_berat,status_gizi,fuzzy) VALUES ('$nik','$nama','$jenis_kelamin','$tanggal_lahir','$nama_orang_tua','$bb_lahir','$tb_lahir','$alamat','$kecamatan','$usia_saat_diukur','$tanggal_pengukuran','$tinggi_badan','$berat_badan','$status_tinggi','$status_berat','$status_gizi','$fuzzy')";
            if (mysqli_query(koneksi(), $query_insert)) {
                $response = [
                    'status' => true,
                    'msg' => 'Data berhasil di tambahkan'
                ];
            } else {
                $response = [
                    'status' => false,
                    'msg' => "Error: " . $query_insert . "<br>" . mysqli_error(koneksi()),
                ];
            }
        };
    }
    echo json_encode($response);
}
// use for check nik when post data from view

function check_nik()
{
    $koneksi = koneksi();
    $nik = $_POST['nik'];
    $query_select = "SELECT * FROM table_data_balita WHERE nik='$nik'";
    $check_nik = mysqli_query(koneksi(), $query_select);
    $check_data_nik = mysqli_fetch_row($check_nik);
    if ($check_data_nik) {
        $response = [
            'status' => false,
            'msg' => 'NIK Sudaf terdaftar, silahkan gunakan nik lain'
        ];
    } else {
        $response = [
            'status' => false,
        ];
    }
    return $response;
}
// count for age
function hitung_usia()
{

    $tgl_lahir = $_POST['tgl_lahir'];
    $tgl_ukur = $_POST['tanggal_pengukuran'];
    if ($tgl_lahir !== "" && $tgl_ukur !== "") {
        $tgl_lahir = new DateTime($tgl_lahir);
        $tgl_ukur = new DateTime($tgl_ukur);
        if ($tgl_lahir > $tgl_ukur) {
            $response = [
                'usia' => '0 tahun 0 bulan 0 hari'
            ];
        } else {
            $y = $tgl_ukur->diff($tgl_lahir)->y;
            $m = $tgl_ukur->diff($tgl_lahir)->m;
            $d = $tgl_ukur->diff($tgl_lahir)->d;
            $response = [
                'usia' => $y . " tahun " . $m . " bulan " . $d . " hari",
            ];
        }
    } else {
        $response = [
            'usia' => '0 tahun 0 bulan 0 hari'
        ];
    }
    echo json_encode($response);
}
