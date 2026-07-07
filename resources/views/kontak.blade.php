<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Kontak Kelurahan Padangiring</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{

            position:fixed;

            top:0;
            left:0;

            width:100%;

            z-index:1000;

            display:flex;

            justify-content:space-between;

            align-items:center;

            padding:20px 60px;

            background:rgba(0,0,0,0.45);

            backdrop-filter:blur(10px);

        }

        .logo{

            color:#FFD700;

            font-size:28px;

            font-weight:700;

            letter-spacing:2px;

        }

        .navbar ul{

            display:flex;

            list-style:none;

        }

        .navbar ul li{
            margin-left:30px;
        }

        .navbar ul li a{

            color:white;

            text-decoration:none;

            font-weight:500;

            transition:0.3s;

        }

        .navbar ul li a:hover{
            color:#FFD700;
        }

        /* HERO */

        .hero{

            height:60vh;

            background:
            linear-gradient(
                rgba(0,0,0,0.65),
                rgba(0,0,0,0.65)
            ),
            url('/images/profil kantor lurah.jpeg');

            background-size:cover;

            background-position:center;

            display:flex;

            justify-content:center;

            align-items:center;

            text-align:center;

            padding:20px;

            color:white;

        }

        .hero-content h1{

            font-size:65px;

            color:#FFD700;

            margin-bottom:20px;

        }

        .hero-content p{

            font-size:22px;

            line-height:1.8;

        }

        /* MOTIF */

        .motif{

            height:10px;

            background:
            repeating-linear-gradient(
                45deg,
                #8B0000,
                #8B0000 10px,
                #FFD700 10px,
                #FFD700 20px,
                #111 20px,
                #111 30px
            );

        }

        /* CONTAINER */

        .container{

        width:100%;
        max-width:1300px;

        margin:auto;

        display:flex;

        justify-content:center;

        align-items:flex-start;

        gap:40px;

        padding:80px 20px;

        flex-wrap:wrap;

    }

        /* CARD */

        .card{

        background:white;

        width:100%;

        max-width:550px;

        padding:40px;

        border-radius:30px;

        box-shadow:0 10px 30px rgba(0,0,0,.08);

        transition:.3s;

    }

        .card:hover{
            transform:translateY(-8px);
        }

        .card h2{

            color:#8B0000;

            margin-bottom:25px;

            font-size:32px;

        }

        .card p{

            color:#555;

            line-height:1.9;

            margin-bottom:20px;

        }

        /* INFO ITEM */

        .info{

            margin-bottom:25px;

            padding-bottom:20px;

            border-bottom:1px solid #eee;

        }

        .info strong{
            color:#8B0000;
        }

        /* FORM */

        input,
        textarea{

            width:100%;

            padding:16px;

            margin-top:10px;

            margin-bottom:25px;

            border:none;

            background:#f5f5f5;

            border-radius:15px;

            font-size:15px;

            outline:none;

        }

        textarea{

            height:140px;

            resize:none;

        }

        /* BUTTON */

        button{

            background:linear-gradient(
                135deg,
                #8B0000,
                #111
            );

            color:white;

            border:none;

            padding:16px 35px;

            border-radius:50px;

            cursor:pointer;

            font-weight:600;

            transition:0.4s;

        }

        button:hover{
            transform:translateY(-5px);
        }

        /* MAP */

        iframe{

            width:100%;

            height:320px;

            border:none;

            border-radius:20px;

            margin-top:25px;

        }

        /* FOOTER */

        .footer{

            background:#111;

            color:white;

            text-align:center;

            padding:60px 20px;

            margin-top:60px;

        }

        .footer h3{

            color:#FFD700;

            margin-bottom:15px;

        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .navbar{

                flex-direction:column;

                padding:20px;

            }

            .navbar ul{

                margin-top:15px;

                flex-wrap:wrap;

                justify-content:center;

            }

            .navbar ul li{
                margin:10px;
            }

            .hero-content h1{
                font-size:42px;
            }

            .hero-content p{
                font-size:18px;
            }

            .container{

                grid-template-columns:1fr;

            }

            .card{
                padding:30px;
            }

        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <div class="logo">
            PADANGIRING
        </div>

        <ul>

            <li><a href="{{ url('/home') }}">Beranda</a></li>

            <li><a href="{{ url('/profil') }}">Profil</a></li>

            <li><a href="{{ url('/layanan') }}">Layanan</a></li>

            <li><a href="{{ url('/berita') }}">Berita</a></li>

            <li><a href="{{ url('/galeri') }}">Galeri</a></li>

            <li><a href="{{ url('/kontak') }}">Kontak</a></li>

            <li><a href="{{ url('/login') }}">Login</a></li>

        </ul>

    </div>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <h1>Hubungi Kami</h1>

            <p>
                Pelayanan informasi modern berbasis budaya Toraja
            </p>

        </div>

    </section>

    <div class="motif"></div>

    <!-- CONTAINER -->

    <section class="container">

        <!-- INFO -->

        <div class="card">

            <h2>Informasi Kontak</h2>

            <div class="info">

                <p>

                    <strong>Alamat:</strong><br>

                    Kantor Kelurahan Padangiring,
                    Kecamatan Rantetayo,
                    Kabupaten Tanah Toraja

                </p>

            </div>

            <div class="info">

                <p>

                    <strong>Telepon:</strong><br>

                    0812-3456-7890

                </p>

            </div>

            <div class="info">

                <p>

                    <strong>Email:</strong><br>

                    kelurahanpadangiring@gmail.com

                </p>

            </div>

            <div class="info">

                <p>

                    <strong>Jam Pelayanan:</strong><br>

                    Senin - Jumat<br>
                    08.00 - 15.00

                </p>

            </div>

</div>        

        <!-- FORM -->

<div class="card">

    <h2>Kirim Pengaduan</h2>

    <p>
        Silakan kirim kritik, saran, atau pengaduan Anda
        kepada pihak Kelurahan Padangiring.
    </p>

    <form action="{{ url('/kirim-pesan') }}"
          method="POST">

        @csrf

        <label>Nama Lengkap</label>

        <input type="text"
               name="nama"
               placeholder="Masukkan nama lengkap"
               required>

        <label>Email</label>

        <input type="email"
               name="email"
               placeholder="Masukkan email aktif"
               required>

        <label>Pesan / Pengaduan</label>

        <textarea
            name="pesan"
            placeholder="Tulis pesan atau pengaduan Anda..."
            required></textarea>

        <button type="submit">

            Kirim Pesan

        </button>

    </form>

</div>
    </section>

    <!-- FOOTER -->

    <div class="footer">

        <h3>Kelurahan Padangiring</h3>

        <p>
            Website Resmi Pelayanan Berbasis Digital
        </p>

        <br>

        <p>
            © 2026 Kelurahan Padangiring
        </p>

    </div>

</body>
</html>