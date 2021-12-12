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

<body class="mt-5">
    <!-- navbar -->
    <?php $this->load->view("frondend/tamplate/navbar");?>

    <!-- Informasi Penyakit -->
    <section id="informasi_penyakit" class="informasi_penyakit">
        <div class="container">
            <br><br>
            <h2 height="500px" id="Informasi_Penyakit" class="text-center mb-5">Informasi Penyakit</h2>
            <div class="row mb-5">
                <div class="col-3">
                    <img src="<?php echo base_url() ?>assets/Gambar/foto_frondend/anak.png"
                        style="height:250px; weidht:250px" class="img-thumbnail">
                </div>
                <div class="col-9">
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

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
            </table>

        </div>
    </section>
    <!-- Informasi Penyakit-->


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