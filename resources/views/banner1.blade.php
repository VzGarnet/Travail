<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css2/banner1.css')}}">

    <title>Cek Order</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/welcome">
        <img src="{{url('/images/travail1.png')}}" alt="Image"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Bebas</a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Booking
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/search">Booking Ticket</a>
            <a class="dropdown-item" href="/cekorder">Check Order</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>


        </ul>
        <li class="Login">
            <a class="login" href="/login">Login/Sign Up</a>
        </li>
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <div class="desc-box" id="desc1">
        <div class="desc-text-center">ABOUT</div>
    </div> -->

    <div class = banner1>
        <img src = "/images/Promo1 2.png" alt="Banner1">
        <div class = text>
            <h1>Syarat dan Ketentuan</h1>
            <p> 1. Pemesanan tiket berlaku mulai 12-19 Desember 2023 <br>
                2. Pembelian promo dapat melalui website Travail <br>
                3. Hanya berlaku bagi kereta api tujuan Jakarta Bandung <br>
                4. Minimum transaksi Rp 300.000,00 <br>
                5. Kode kupon hanya berlaku untuk satu kali transaksi <br>
                6. Kode kupon tidak dapat ditukarkan dengan uang <br>
                7. Setiap transaksi yang menggunakan kode kupon ini jika ingin melakukan refund atau reschedule pemesanan, maka kode promo akan hangus dan tidak dapat digunakan kembali <br>
                8. Pengguna dengan usia di bawah 8 tahun wajib memiliki pendamping yang memenuhi syarat perjalanan  </p>
        </div>
    </div>

</body>

<footer class="text-center text-white" style="top: 750px; position: relative">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3">
        © 2023 Copyright:
        <a class="text-dark" href="#">Travail</a>
    </div>
    <!-- Copyright -->
</footer>

</html>
