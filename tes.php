<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" id="form_balita" method="post">
        <input type="text" hidden class="" name="type" value="simpan_data_balita">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>NIK</label>
                <input type="text" name="nik" onkeyup="check_nick();" class="form-control" value="1106505905237854" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="ARCELA ZULFA SHAKAYLA">
            </div>
            <div class="form-group col-md-6">
                <label>Jenis Kelamin</label>
                <select class="form-control form-control-lg default-select ">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Nama Orang Tua</label>
                <input type="text" name="nama_orang_tua" class="form-control" placeholder="" value="ERIKA DIO SANDA">
            </div>
            <div class="form-group col-md-6">
                <label>Kecamatan</label>
                <select class="form-control form-control-lg default-select " name="kecamatan">
                    <?php foreach ($kecamatan as $key => $value) : ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"> BUR BIAH</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>BB Lahir</label>
                <input type="number" name="bb_lahir" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>TB Lahir</label>
                <input type="number" name="tb_lahir" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Pengukuran</label>
                <input type="date" name="tanggal_pengukuran" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Usia Saat Di Ukur</label>
                <input type="number" name="usia_saat_diukur" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Berat Badan</label>
                <input type="number" name="berat_badan" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Tinggi Badan</label>
                <input type="number" name="tinggi_badan" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12 text-center">
                <label>Sattus Gizi</label>
                <input type="text" readonly class="form-control" disabled placeholder="">
            </div>
        </div>
        <div class="text-center">
            <button type="button" onclick="store_data()" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</body>
<script src="./assets/js/jquery-3.7.1.js"></script>
<script src="./assets/js/form-master/form-master/dist/jquery.form.min.js"></script>
<script>
    store_data = () => {
        $("#form_balita").ajaxForm({
            type: "POST",
            url: "fungsi.php",
            dataType: "JSON",
            success: function(response) {

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
</script>

</html>