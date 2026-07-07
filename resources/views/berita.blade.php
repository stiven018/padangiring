<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Berita Kelurahan Padangiring</title>

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

            height:65vh;

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

            color:white;

            padding:20px;

        }

        .hero-content{

            max-width:850px;

        }

        .hero-content h1{

            font-size:70px;

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

            width:90%;

            max-width:1300px;

            margin:auto;

            padding:90px 0;

        }

        .section-title{

            text-align:center;

            margin-bottom:60px;

        }

        .section-title h2{

            font-size:45px;

            color:#8B0000;

            margin-bottom:15px;

        }

        .section-title p{

            color:#666;

            font-size:18px;

        }

        /* NEWS GRID */

        .news-grid{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:30px;

    align-items:start;

}

        /* CARD */

        .news-card{

            background:white;

            border-radius:30px;

            overflow:hidden;

            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            transition:0.4s;

        }

        .news-card{

    display:flex;

    flex-direction:column;

    height:100%;

}

        .news-card:hover{

            transform:translateY(-10px);

        }

        .news-image{

            height:240px;

            overflow:hidden;

        }

        .news-image img{

            width:100%;

            height:100%;

            object-fit:cover;

            transition:0.5s;

        }

        .news-card:hover img{

            transform:scale(1.1);

        }

        .news-content{

            padding:30px;

        }

        .news-date{

            display:inline-block;

            background:#8B0000;

            color:white;

            padding:8px 18px;

            border-radius:50px;

            font-size:14px;

            margin-bottom:20px;

        }

        .news-content h3{

            color:#8B0000;

            margin-bottom:18px;

            font-size:24px;

        }

        .news-content p{

        color:#555;

        line-height:1.8;

        text-align:justify;

        min-height:100px;

        margin-bottom:25px;

    }

        .btn{

            display:inline-block;

            padding:14px 30px;

            border-radius:50px;

            text-decoration:none;

            color:white;

            background:linear-gradient(
                135deg,
                #8B0000,
                #111
            );

            transition:0.4s;

        }

        .btn:hover{

            transform:translateY(-5px);

        }

        /* INFO SECTION */

        .info-section{

            margin-top:90px;

            background:white;

            border-radius:35px;

            padding:60px;

            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            text-align:center;

        }

        .info-section h2{

            color:#8B0000;

            font-size:40px;

            margin-bottom:20px;

        }

        .info-section p{

            color:#555;

            line-height:2;

            font-size:18px;

        }

        /* FOOTER */

        .footer{

            background:#111;

            color:white;

            text-align:center;

            padding:60px 20px;

            margin-top:80px;

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
                font-size:45px;
            }

            .hero-content p{
                font-size:18px;
            }

            .info-section{
                padding:35px;
            }

        }

        @media(max-width:992px){

            .news-grid{

            grid-template-columns:repeat(2,1fr);

            }

            }

            @media(max-width:768px){

            .news-grid{

            grid-template-columns:1fr;

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

            <h1>Berita Kelurahan</h1>

            <p>
                Informasi terbaru kegiatan masyarakat,
                budaya Toraja, dan pelayanan digital
                Kelurahan Padangiring.
            </p>

        </div>

    </section>

    <div class="motif"></div>

    <!-- CONTENT -->

    <section class="container">

        <div class="section-title">

            <h2>Berita Terbaru</h2>

            <p>
                Update kegiatan dan informasi masyarakat
            </p>

        </div>

            <!-- NEWS GRID -->

<div class="news-grid">

    @foreach($berita as $item)

    <div class="news-card">

        <div class="news-image">

            <img src="{{ asset('uploads/'.$item->gambar) }}">

        </div>

        <div class="news-content">

            <span class="news-date">

                {{ $item->created_at->format('d M Y') }}

            </span>

            <h3>

                {{ $item->judul }}

            </h3>

            <p>

                {{ $item->isi }}

            </p>

            <a href="#" class="btn">

                Baca Selengkapnya

            </a>

        </div>

    </div>

    @endforeach

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