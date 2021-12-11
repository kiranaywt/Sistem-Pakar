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
                                <li class="breadcrumb-item active">Edit Data Penyakit</li>
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
                                    <h3 class="card-title">Edit Data Penyakit</h3>
                                </div>

                                <form action="<?php echo base_url('admin/Faktor/edit_faktor')?>" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Faktor Penyebab Stunting</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $data_faktor->faktor_penyebab?>"
                                                id="exampleInputEmail1" placeholder="Masukkan Faktor Penyebab Stunting"
                                                name="faktor_penyebab">
                                            <input type="hidden" value="<?php echo $data_faktor->id_faktor?>"
                                                name="id_faktor">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bobot Faktor</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $data_faktor->bobot_faktor?>"
                                                id="exampleInputPassword1" placeholder="Masukkan Bobot Faktor"
                                                name="bobot_faktor">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                        <a href="<?= base_url('admin/Faktor/tampil_Faktor/') ?>"><button type="button"
                                                class="btn btn-primary">Kembali</button></a>
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