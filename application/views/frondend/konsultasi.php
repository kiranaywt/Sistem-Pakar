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
            <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
        </ol>
    </div>
</div>
<!-- tutup jumbotron -->

<!-- konsultasi -->
<div class="container mb-3">
    <h4>Pilih Sesuai Kondisi :</h4>
    <p>Jika <b>ada</b> salah satu faktor yang dialami <b>pilih opsi (Pasti, Kurang Pasti, dan Tidak Pasti)</b> sesuai
        dengan kondisi.
        Apabila <b>tidak ada</b> faktor yang
        dialami dapat <b>mengosongi opsi</b> tersebut.</p>
</div>

<div class="container">
    <?php 
    $no="1" ;
    foreach ($data_kuisoner as $data) {
    ?>
    <div class="container">
        <p><b><?php echo $no++ ;?>. <?php echo $data['faktor_penyebab']?></b></p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="a" checked>
            <label class="form-check-label" for="exampleRadios1">
                Pasti
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="b">
            <label class="form-check-label" for="exampleRadios2">
                Kurang Pasti
            </label>
        </div>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="c">
            <label class="form-check-label" for="exampleRadios3">
                Tidak Pasti
            </label>
        </div>
    </div>

    <?php }?>

    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 mb-5">
            <button type="submit" class="btn btn-primary btn-md float-right">Proses</button>
        </div>
    </div>
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