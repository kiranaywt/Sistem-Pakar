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

<body class="mt-5">
    <?php $this->load->view("frondend/tamplate/navbar");?>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="<?php echo base_url() ?>assets/Gambar/foto_frondend/dokter.png" class="img-fluid rounded"
                width="25%" alt="Responsive image">
            <!-- <style type="text/css">
				.jumbotron {
					position: relative;
					background: url(img/bg3.png) center center;
					color: currentColor;
					width: 100%;
					height: 100%;
					background-size: cover;
					overflow: hidden;
				}
			</style> -->
            <h1 class="display-7 mt-4" height="100%" width="30%">DETEKSI RAWAN STUNTING PADA BALITA</h1>
            <p>Selamat Datang, Website ini dapat membantu orang tua dalam mengevaluasi atau memonitoring pertumbuhan
                anak usia 0 - 24 bulan dalam kasus stunting</p>
            <!-- <button class="btn btn-danger me-md-2 mt-5" type="button">Mulai Konsultasi</button> -->
        </div>
    </div>
    <!-- tutup jumbotron -->

    <!-- menu -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2>Menu Utama</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/aboutus.jpeg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Tentang</h5>
                            <p class="card-text">Sistem Pakar Deteksi Rawan Stunting.</p>
                            <a href="#tentang">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/info.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Informasi Penyakit</h5>
                            <p class="card-text">Informasi Penyakit Stunting.</p>
                            <a href="Frondend/frondend/informasi_penyakit">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <!-- <img class="card-img-top" src="img/dokter.jpg" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi</h5>
                            <p class="card-text">Mulai untuk Konsultasi.</p>
                            <a href="<?php echo base_url("Frondend/frondend/biodata")?>">
                                <button type="button" class="btn btn-outline-primary">Tekan Disini</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tutup menu -->

    <!-- tentang -->
    <section id="tentang" class="tentang">
        <div class="container">
            <div class="row mb-5"></div>
            <div class="row mb-5">
                <div class="col text-center">
                    <h2>Tentang</h2>
                    <p>Sistem Pakar Deteksi Rawan Stunting pada Balita Usia 0 - 24 Bulan
                        merupakan sistem yang dapat membantu orang tua dalam mengevaluasi dan mengontrol pertumbuhan
                        Balita dalam kasus penyakit Stunting.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- tutup tentang-->

    <!-- Informasi Penyakit -->
    <section id="informasi_penyakit" class="informasi_penyakit">
        <div class="container">
            <h2 id="Informasi_Penyakit" class="text-center mb-5">Informasi Penyakit</h2>
            <div class="row mb-5">
                <div class="col-6">
                    <img src="<?php echo base_url() ?>assets/Gambar/foto_frondend/anak.png" height="20px"
                        class="img-thumbnail">
                </div>
                <div class="col-6">
                    <p class="text-justify">Stunting (kerdil) adalah kondisi dimana balita memiliki panjang atau tinggi
                        badan yang kurang
                        jika dibandingkan dengan umur. Kondisi ini diukur dengan panjang atau tinggi badan yang lebih
                        dari minus dua standar deviasi median standar pertumbuhan anak dari WHO. Terdapat dampak gejala
                        stunting jangka pendek meliputi hambatan perkembangan, penurunan fungsi kekebalan, penurunan
                        fungsi kognitif, dan gangguan sistem pembakaran. Sedangkan dampak gejala jangka panjang meliputi
                        obesitas, penurunan toleransi glukosa, penyakit jantung koroner, hipertensi, dan osteoporosis.
                        Pada kasus seperti ini orang tua sangat berperan penting pada pola asuh anak.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Penyakit-->


    <!-- footer -->
    <footer>
        <div class="text-center p-4 bg-info text-white fixed-buttom">
            <strong>Copyright &copy; 2021 <a class="text-white"
                    href="https://www.instagram.com/kiranaywt">KY</a></strong>
        </div>
    </footer>
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