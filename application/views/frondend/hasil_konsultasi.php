<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sistem Pakar Stunting</title>
</head>

<!-- tutup my css -->

<!-- navbar -->
<?php $this->load->view("frondend/tamplate/navbar");?>
<!-- tutup navbar -->

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Konsultasi</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/index")?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/biodata")?>">Biodata</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url("Frondend/frondend/konsultasi")?>">Konsultasi</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> Hasil Konsultasi</li>
        </ol>
    </div>
</div>
<!-- tutup jumbotron -->

<!-- konsultasi -->
<div class="container mb-4">
    <h5>Hasil Keadaan yang Dihasilkan</h5>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DIAGNOSA PENYAKIT :</th>
            <tr>
                <th>NILAI ANALISA PAKAR (KEMIRIPAN) :</th>
            </tr>
            <tr>
                <th>NILAI ANALISA PAKAR (KEPASTIAN) :</th>
            </tr>
            <tr>
                <th>SOLUSI PENYAKIT :</th>
            </tr>
        </thead>
    </table>

    <div>
        <h5 class="mb-4">Faktor-Faktor yang Dipilih</h5>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID Faktor</th>
                <th scope="col" class="text-center">Faktor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Penyakitnya</td>
            </tr>
        </tbody>
    </table>

    <div>
        <h5 class="mb-4">Hasil Perhitungan Nilai Kemiripan</h5>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID Penyakit</th>
                <th scope="col" class="text-center">Nama Penyakit</th>
                <th scope="col" class="text-center">Hasil (Dalam Persen)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Penyakitnya</td>
                <td>Hasilnya</td>
            </tr>
        </tbody>
    </table>

    <div>
        <h5 class="mb-4">Hasil Perhitungan Nilai Kepastian</h5>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID Faktor</th>
                <th scope="col" class="text-center">Faktor</th>
                <th scope="col" class="text-center">Nilai Pakar</th>
                <th scope="col" class="text-center">Kondisi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>ID nya</td>
                <td>Faktor</td>
                <td>Bobot Pakar</td>
                <td>Kondisi</td>
            </tr>
            <tr>
                <td colspan="4" class="text-center">Hasil Perhitungan Nilai Kepastian</td>
                <td>Hasil</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- konsultasi -->

<!-- footer -->
<?php $this->load->view("frondend/tamplate/footer");?>
<!-- footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>