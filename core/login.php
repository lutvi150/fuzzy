<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
function koneksi()
{
    $koneksi = new mysqli("localhost", "root", "", "gizi_fuzzy");
    if (mysqli_connect_errno()) {
        return "Koneksi database gagal : " . mysqli_connect_error();
    } else {
        return $koneksi;
    }
}
if (isset($_GET['make'])) {
    make_account();
}
//validation
$validation = validation();
if ($validation['status'] == false) {
    $response = $validation;
} else {
    $check_account = check_account();
    $response = [
        'status' => true,
        'msg' => 'Login berhasil'
    ];
}
echo json_encode($response);
function check_account()
{
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    $query_select = "SELECT * FROM table_user WHERE username='$username' AND password='$password'";
    $check_account = mysqli_query(koneksi(), $query_select);
    $account = mysqli_fetch_row($check_account);
    if ($account) {
        $_SESSION['id_user'] = $account[0];
        $_SESSION['username'] = $account[1];
        $response = [
            'status' => true,
            'data' => $account,
            'msg' => 'akunterdaftar'
        ];
    } else {
        $response = [
            'status' => false,
            'msg' => 'Akun anda tidak terdaftar',
        ];
    }
    echo json_encode($response);
    exit;
    return $response;
}
function make_account()
{
    $query_select = "SELECT * FROM table_user WHERE username='admin'";
    $check_account = mysqli_query(koneksi(), $query_select);
    $account = $check_account->fetch_row()[0] ?? false;
    if ($account == false) {
        $password = hash('sha256', 'admin');
        $query_insert = "INSERT INTO table_user (username,password,role) VALUES ('admin','$password','admin')";
        $insert_data = mysqli_query(koneksi(), $query_insert);
        echo json_encode(['status' => 'akun baru di tambahkan']);
        exit;
    } else {
        echo json_encode(['status' => 'akun sudah ada']);
        exit;
    }
}
function validation()
{
    if ($_POST['username'] == "" || $_POST['password'] == "") {
        $response = [
            'status' => false,
            'msg' => 'Username atau password tidak boleh kosong',
        ];
    } else {
        $response = [
            'status' => true,
        ];
    }
    return $response;
}
