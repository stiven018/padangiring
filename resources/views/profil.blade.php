<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kelurahan Padangiring</title>

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
            width:100%;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            z-index:1000;

            background:rgba(0,0,0,0.5);
            backdrop-filter:blur(10px);
        }

        .logo{
            color:#FFD700;
            font-size:30px;
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
            height:100vh;

            background:
            linear-gradient(rgba(0,0,0,0.65),
            rgba(0,0,0,0.65)),
            url('/images/profil kantor lurah.jpeg');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;

            padding:20px;
        }

        .hero-content{
            max-width:900px;
            color:white;
        }

        .hero-content h1{
            font-size:70px;
            margin-bottom:25px;
            color:#FFD700;

            animation:fadeDown 1s ease;
        }

        .hero-content p{
            font-size:22px;
            line-height:1.9;

            animation:fadeUp 1.5s ease;
        }

        .hero-btn{
            margin-top:40px;
            display:inline-block;
            padding:16px 40px;
            border-radius:50px;
            background:#8B0000;
            color:white;
            text-decoration:none;
            font-weight:600;
            transition:0.4s;
        }

        .hero-btn:hover{
            background:#b30000;
            transform:translateY(-5px);
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
            max-width:1200px;
            margin:auto;
            padding:90px 0;
        }

        /* SECTION TITLE */

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
        }

        /* CARD */

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:30px;
        }

        .card{
            background:white;
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            transition:0.4s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .card-top{
            height:8px;
            background:linear-gradient(90deg,#8B0000,#FFD700,#111);
        }

        .card-content{
            padding:35px;
        }

        .card h3{
            color:#8B0000;
            margin-bottom:20px;
        }

        .card p,
        .card li{
            color:#555;
            line-height:1.9;
        }

        .card ul{
            margin-left:20px;
        }

        /* STRUKTUR */

        .struktur{
            margin-top:70px;
            background:white;
            border-radius:25px;
            padding:50px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .struktur h2{
            text-align:center;
            color:#8B0000;
            margin-bottom:40px;
            font-size:40px;
        }

        .struktur-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:25px;
        }

        .pegawai{
            background:#fafafa;
            border-left:5px solid #8B0000;
            padding:25px;
            border-radius:15px;
            transition:0.3s;
        }

        .pegawai:hover{
            background:#fff4e8;
        }

        .pegawai h4{
            color:#8B0000;
            margin-bottom:10px;
        }

        /* STATS */

        .stats{
            margin-top:80px;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:25px;
        }

        .stat-box{
            background:linear-gradient(135deg,#8B0000,#111);
            color:white;
            text-align:center;
            padding:40px;
            border-radius:20px;
        }

        .stat-box h2{
            color:#FFD700;
            font-size:45px;
        }

        .stat-box p{
            margin-top:10px;
        }

        /* FOOTER */

        .footer{
            margin-top:100px;
            background:#111;
            color:white;
            text-align:center;
            padding:60px 20px;
        }

        .footer h3{
            color:#FFD700;
            margin-bottom:15px;
        }

        /* ANIMATION */

        @keyframes fadeDown{

            from{
                opacity:0;
                transform:translateY(-50px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

        @keyframes fadeUp{

            from{
                opacity:0;
                transform:translateY(50px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .navbar{
                padding:20px;
                flex-direction:column;
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

            .struktur{
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

            <h1>PROFIL PADANGIRING</h1>

            <p>
                Mengangkat nilai budaya Toraja dalam pelayanan
                masyarakat yang modern, transparan, dan berbasis digital.
            </p>

        </div>

    </section>

    <div class="motif"></div>

    <!-- PROFIL -->

    <section class="container">

        <div class="section-title">

            <h2>Tentang Kelurahan</h2>

            <p>
                Perpaduan budaya lokal Toraja dan pelayanan modern
            </p>

        </div>

        <div class="cards">

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Sejarah</h3>

                    <p>
                        Kelurahan Padangiring berkembang dengan menjunjung
                        tinggi budaya gotong royong, adat Toraja,
                        dan semangat pelayanan masyarakat yang modern.
                    </p>

                </div>

            </div>

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Visi</h3>

                    <p>
                        Menjadi kelurahan modern berbasis budaya lokal
                        yang unggul dalam pelayanan masyarakat.
                    </p>

                </div>

            </div>

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Misi</h3>

                    <ul>

                        <li>Meningkatkan pelayanan publik</li>

                        <li>Menjaga nilai budaya Toraja</li>

                        <li>Mendorong digitalisasi pelayanan</li>

                        <li>Meningkatkan kesejahteraan masyarakat</li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- STRUKTUR -->

        <div class="struktur">

            <h2>Struktur Organisasi</h2>

            <div class="struktur-grid">

                <div class="pegawai">

                    <h4>Lurah</h4>

                    <p>Memimpin pemerintahan kelurahan</p>

                </div>

                <div class="pegawai">

                    <h4>Sekretaris</h4>

                    <p>Mengelola administrasi kelurahan</p>

                </div>

                <div class="pegawai">

                    <h4>Kasi Pelayanan</h4>

                    <p>Melayani kebutuhan administrasi warga</p>

                </div>

                <div class="pegawai">

                    <h4>Kasi Pemerintahan</h4>

                    <p>Mengelola urusan pemerintahan</p>

                </div>

            </div>

        </div>

        <!-- STATS -->

<div class="stats">

    <div class="stat-box">

        <h2>{{ number_format($totalWarga ?? 0) }}</h2>

        <p>Jumlah Penduduk</p>

    </div>

    <div class="stat-box">

        <h2>13</h2>

        <p>RT / RW</p>

    </div>

    <div class="stat-box">

        <h2>{{ $totalSurat ?? 0 }}</h2>

        <p>Total Pengajuan Surat</p>

    </div>

    <div class="stat-box">

        <h2>{{ $pengunjungHariIni ?? 0 }}</h2>

        <p>Pengunjung Hari Ini</p>

    </div>

</div>

        </div>

    </section>

    <!-- FOOTER -->

    <div class="footer">

        <h3>Kelurahan Padangiring</h3>

        <p>
            Website Resmi Pelayanan Berbasis digital
        </p>

        <br>

        <p>
            © 2026 Kelurahan Padangiring
        </p>

    </div>

</body>
</html>