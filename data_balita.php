<?php
include 'koneksi.php';
$query_select = "SELECT * FROM table_data_balita ORDER by id_balita desc";
$result = mysqli_query(koneksi(), $query_select);
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Balita</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Balita</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="admin.php?menu=tambah_balita" class="btn btn-success btn-xs">Tambah Data Balita</a>
                            <table id="example4" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nama Orang Tua</th>
                                        <th>Kec</th>
                                        <th>Alamat</th>
                                        <th>BB Lahir</th>
                                        <th>TB Lahir</th>
                                        <th>Usia Saat di Ukur</th>
                                        <th>Tgl Ukur</th>
                                        <th>BB</th>
                                        <th>TB</th>
                                        <th>Status Gizi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                while ($a = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a['nik'] ?></td>
                                        <td><?= $a['nama'] ?></td>
                                        <td><?= $a['jenis_kelamin'] ?></td>
                                        <td><?= $a['tgl_lahir'] ?></td>
                                        <td><?= $a['nama_ortu'] ?></td>
                                        <td><?= $a['kecamatan'] ?></td>
                                        <td><?= $a['alamat'] ?></td>
                                        <td><?= $a['bb_lahir'] ?></td>
                                        <td><?= $a['tb_lahir'] ?></td>
                                        <td><?= $a['usia_saat_ukur'] ?></td>
                                        <td><?= $a['tgl_pengukuran'] ?></td>
                                        <td><?= $a['berat'] ?></td>
                                        <td><?= $a['tinggi'] ?></td>

                                        <td>
                                            <?php if ($a['status_gizi'] == 1) { ?>
                                                <span class="badge light badge-warning">Gizi Berlebih</span>
                                            <?php } elseif ($a['status_gizi'] == 2) { ?>
                                                <span class="badge light badge-success">Gizi Normal</span>
                                            <?php } else { ?>
                                                <span class="badge light badge-danger">Gizi Buruk</span>
                                            <?php } ?>


                                        </td>
                                        <td>
                                            <a href="edit_data_bayi.php?id_bayi=" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="delete_data_bayi.php?id_bayi=" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        document.body.style.zoom = "80%"
    });
</script>