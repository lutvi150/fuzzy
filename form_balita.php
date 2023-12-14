<?php
$kecamatan = ["Atu Lintang", "Bebesen", "Bies", "Bintang", "Celala", "Jagong Jeget", " Kebayakan", "Ketol", "Kute Panang", "Laut Tawar", "Linge", "Pegasing", "Rusip Antara", " Silih Nara"];
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Balita</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <strong>Informasi</strong>
                            <p>Silahkan tambahkan data balita ke aplikasi untuk menghitung status gizi balita</p>
                        </div>
                        <div class="basic-form">
                            <form action="#" id="form_balita" method="post">
                                <input type="text" hidden class="" name="type" value="simpan_data_balita">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NIK</label>
                                        <input type="text" name="nik" id="nik" onkeyup="check_nick();" class="form-control" value="1106505905237854" placeholder="">
                                        <span class="text-error enik"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="" value="ARCELA ZULFA SHAKAYLA">
                                        <span class="text-error enama"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control form-control-lg default-select ">
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <span class="text-error ejenis_kelamin"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" onchange="check_usia();" class="form-control" placeholder="">
                                        <span class="text-error etanggal_lahir"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama Orang Tua</label>
                                        <input type="text" name="nama_orang_tua" class="form-control" placeholder="" value="ERIKA DIO SANDA">
                                        <span class="text-error enama_orang_tua"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kecamatan</label>
                                        <select class="form-control form-control-lg default-select " name="kecamatan">
                                            <?php foreach ($kecamatan as $key => $value) : ?>
                                                <option value="<?= $value ?>"><?= $value ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="text-error ekecamaan"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" id="" cols="30" rows="10"> BUR BIAH</textarea>
                                        <span class="text-error ealamat"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>BB Lahir</label>
                                        <input type="number" name="bb_lahir" class="form-control" placeholder="">
                                        <span class="text-error ebb_lahir"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>TB Lahir</label>
                                        <input type="number" name="tb_lahir" class="form-control" placeholder="">
                                        <span class="text-error etb_lahir"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Pengukuran</label>
                                        <input type="date" id="tanggal_pengukuran" name="tanggal_pengukuran" onchange="check_usia();" class="form-control" placeholder="">
                                        <span class="text-error etanggal_pengukuran"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Usia Saat Di Ukur</label>
                                        <input type="text" id="usia_saat_diukur" name="usia_saat_diukur" readonly class="form-control" placeholder="">
                                        <span class="text-error eusia_saat_diukur"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Berat Badan</label>
                                        <input type="number" name="berat_badan" class="form-control" placeholder="">
                                        <span class="text-error eberat_badan"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tinggi Badan</label>
                                        <input type="number" name="tinggi_badan" class="form-control" placeholder="">
                                        <span class="text-error etinggi_badan"></span>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                        <label>Status Gizi</label>
                                        <input type="text" readonly name="status_gizi" class="form-control" disabled placeholder="">
                                        <span class="text-error estatus_gizi"></span>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" onclick="store_data()" disabled class="btn btn-success btn-store"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    store_data = () => {
        $(".text-error").text("");
        $("#form_balita").ajaxForm({
            type: "POST",
            url: "fungsi.php",
            dataType: "JSON",
            success: function(response) {
                if (response.status == true) {
                    Swal.fire({
                        title: "Success",
                        text: `${response.msg}`,
                        icon: "success"
                    });
                } else if (response.status == 'validation_failed') {
                    $.each(response.msg, function(indexInArray, valueOfElement) {
                        $(".e" + indexInArray).text(valueOfElement);
                    });
                } else {
                    Swal.fire({
                        title: "Error",
                        text: `${response.msg}`,
                        icon: "error",
                        confirmButtonText: "Oke",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "admin.php";
                        }
                    });
                }

            },
            error: function() {
                Swal.fire({
                    title: "Error",
                    text: "Ada Sesuatu yang salah !",
                    icon: "error"
                });
            }
        }).submit();
    }
    check_nick = () => {
        $.ajax({
            type: "POST",
            url: "fungsi.php",
            data: {
                nik: $("#nik").val(),
                type: "check_nik"
            },
            dataType: "JSON",
            success: function(response) {
                if (response.status == true) {
                    $(".enik").text(response.msg);
                    $(".btn-store").attr("disabled", true);
                } else {
                    $(".btn-store").removeAttr("disabled");
                }
            },
            error: function() {
                Swal.fire({
                    title: "Error",
                    text: "Ada Sesuatu yang salah !",
                    icon: "error"
                });
            }
        });
    }
    check_usia = () => {
        $.ajax({
            type: "POST",
            url: "fungsi.php",
            data: {
                tgl_lahir: $("#tanggal_lahir").val(),
                tanggal_pengukuran: $("#tanggal_pengukuran").val(),
                type: 'hitung_usia',
            },
            dataType: "JSON",
            success: function(response) {
                $("#usia_saat_diukur").val(response.usia);
            },
            error: function() {
                Swal.fire({
                    title: "Error",
                    text: "Ada Sesuatu yang salah !",
                    icon: "error"
                });
            }
        });
    }
</script>