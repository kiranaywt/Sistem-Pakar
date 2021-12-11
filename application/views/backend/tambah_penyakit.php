<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Penyakit Stunting</title>
    <!-- head -->
    <?php $this->load->view('backend/tamplate/head')?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/tamplate/navbar')?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('backend/tamplate/sidebar')?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Penyakit</li>
                                <li class="breadcrumb-item active">Tambah Data Penyakit</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Penyakit</h3>
                                </div>

                                <form action="<?php echo base_url('admin/Penyakit/save_penyakit')?>" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penyakit</label>
                                            <input type="text" class="form-control" name="penyakit"
                                                id="exampleInputEmail1" placeholder="Masukkan Nama Penyakit">
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Detail Penyakit</label>
                                                    <textarea class="form-control" rows="7"
                                                        placeholder="Masukkan Detail Penyakit" name="detail"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Solusi Penyakit</label>
                                                    <textarea class="form-control" rows="7"
                                                        placeholder="Masukkan Solusi Penyakit" name="solusi"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                        <a href="<?= base_url('admin/Penyakit/tampil_penyakit') ?>"><button
                                                type="button" class="btn btn-primary">Kembali</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- footer -->
        <?php $this->load->view('backend/tamplate/footer')?>

    </div>
    <!-- ./wrapper -->
    <!-- js - menggabungkan file yg dipisah -->
    <?php $this->load->view('backend/tamplate/js')?>

</body>

</html>