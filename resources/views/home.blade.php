<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Padangiring</title>

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
            width:100%;
            top:0;
            left:0;
            z-index:1000;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:20px 60px;

            background:rgba(0,0,0,0.4);
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
            font-size:75px;
            color:#FFD700;
            margin-bottom:20px;

            animation:fadeDown 1s ease;
        }

        .hero-content p{
            font-size:24px;
            line-height:1.8;

            animation:fadeUp 1.5s ease;
        }

        .hero-btn{
            display:inline-block;
            margin-top:40px;
            padding:16px 40px;
            background:#8B0000;
            color:white;
            text-decoration:none;
            border-radius:50px;
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

        /* SECTION */

        .container{
            width:90%;
            max-width:1200px;
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
            margin-bottom:10px;
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

        .card p{
            color:#555;
            line-height:1.8;
        }

        /* SAMBUTAN */

        .sambutan{
            background:white;
            padding:50px;
            border-radius:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            line-height:2;
            color:#555;
        }

        /* BERITA */

.berita-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
    margin-top:40px;
}

.berita{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.berita:hover{
    transform:translateY(-8px);
}

.berita img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.berita-body{
    padding:20px;
}

.berita h3{
    color:#8B0000;
    margin-bottom:12px;
    font-size:22px;
}

.berita p{
    color:#555;
    line-height:1.8;
    text-align:justify;
    min-height:95px;
}

.berita small{
    display:block;
    margin-top:15px;
    color:#888;
}

        .berita:hover{
            transform:translateX(10px);
        }

        .berita h3{
            color:#8B0000;
            margin-bottom:15px;
        }
        /* QUICK MENU */

        .quick-menu{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
            margin:40px 0 60px;
        }

        .quick-item{
            background:white;
            padding:25px;
            text-align:center;
            border-radius:20px;
            text-decoration:none;
            color:#333;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            transition:.3s;
        }

        .quick-item:hover{
            transform:translateY(-8px);
        }

        .quick-item .icon{
            font-size:45px;
            margin-bottom:10px;
        }

        .quick-item h3{
            color:#8B0000;
            margin-bottom:8px;
        }

        /* STATS */

        .stats{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:25px;

            margin-top:70px;
        }

        .stat-box{
            background:linear-gradient(135deg,#8B0000,#111);
            color:white;

            padding:40px;
            border-radius:25px;

            text-align:center;
        }

        .stat-box h2{
            color:#FFD700;
            font-size:45px;
        }

        .stat-box p{
            margin-top:10px;
        }

        /* AGENDA KEGIATAN */

        .agenda-section{
            margin-top:90px;
        }

        .agenda-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:25px;
        }

        .agenda-card{
            background:white;
            border-radius:20px;
            padding:25px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            transition:.3s;
        }

        .agenda-card:hover{
            transform:translateY(-8px);
        }

        .agenda-tanggal{
            color:#8B0000;
            font-weight:700;
            font-size:18px;
            margin-bottom:10px;
        }

        .agenda-card h3{
            margin-bottom:10px;
            color:#222;
        }

        .agenda-card p{
            color:#666;
            line-height:1.8;
        }

        /* PETA WILAYAH */

        .map-section{
            margin-top:90px;
        }

        .map-container{
            background:white;
            padding:25px;
            border-radius:25px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .map-container iframe{
            width:100%;
            height:500px;
            border:none;
            border-radius:15px;
        }

        /* COUNTER PENGUNJUNG */

        .visitor-section{
            margin-top:80px;
        }

        .visitor-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
        }

        .visitor-card{
            background:white;
            padding:25px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            transition:.3s;
        }

        .visitor-card:hover{
            transform:translateY(-8px);
        }

        .visitor-card h2{
            color:#8B0000;
            font-size:38px;
            margin-bottom:10px;
        }

        .visitor-card p{
            color:#555;
            font-weight:600;
        }

        /* VIDEO PROFIL */

        .video-section{
            margin-top:80px;
        }

        .video-container{
            background:white;
            padding:25px;
            border-radius:25px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            text-align:center;
        }

        .video-container iframe{
            width:100%;
            height:500px;
            border:none;
            border-radius:15px;
        }

        .video-desc{
            margin-top:20px;
            color:#666;
            line-height:1.8;
        }

        /* FOOTER */

        .footer{
            margin-top:80px;
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

            .sambutan{
                padding:30px;
            }

        }
        /* STATISTIK PENDUDUK */

        .stats{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
            margin:40px 0;
        }

        .stat-box{
            background:white;
            padding:25px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .stat-box h2{
            color:#8B0000;
            font-size:38px;
            margin-bottom:10px;
        }

        .stat-box p{
            color:#666;
            font-size:15px;
        }

        .judul-sambutan{
            text-align:center;
            color:#8B0000;
            font-size:36px;
            font-weight:700;
            margin-top:20px;
            margin-bottom:25px;
        }

        .sambutan{
            max-width:1200px;
            margin:0 auto 50px;
            background:white;
            padding:35px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            line-height:2;
            font-size:18px;
        }
        .garis-lurah{
            width:120px;
            height:4px;
            background:#8B0000;
            margin:25px auto;
            border-radius:10px;
        }
        /* WHATSAPP FLOATING */

        .wa-float{
            position:fixed;
            width:65px;
            height:65px;

            bottom:25px;
            right:25px;

            background:#25D366;
            color:white;

            border-radius:50%;

            display:flex;
            justify-content:center;
            align-items:center;

            font-size:32px;

            text-decoration:none;

            box-shadow:0 5px 20px rgba(0,0,0,.25);

            z-index:9999;

            transition:.3s;
        }

        .wa-float:hover{
            transform:scale(1.1);
        }

        @media(max-width:992px){

    .berita-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:768px){

    .berita-grid{
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

            <h1>SELAMAT DATANG</h1>

            <p>
                Website Resmi Kelurahan Padangiring yang berbasis pelayanan digital.
                website ini hadir sebagai sarana informasi,pelayanan publik dan komunikasi 
                antara pemerintah kelurahan padangiring dengan masyarakat mari bersama
                membangun padangiring yang maju,transparant dan sejahtera.
            </p>

        </div>

    </section>

    <div class="motif"></div>

    <!-- SAMBUTAN -->
    <div style="
    text-align:center;
    margin-top:60px;
    margin-bottom:15px;
">

    <img
    src="{{ asset('images/foto_lurah_padangiring.png') }}"
    alt="Lurah Padangiring"
    style="
        width:220px;
        height:230px;
        object-fit:cover;
        border-radius:12px;
        box-shadow:0 8px 20px rgba(0,0,0,.15);
        margin-top:40px;
    ">

    <h3 style="
        margin-top:8px;
        margin-bottom:0;
        color:#8B0000;
    ">
        YULITA BOROTODING,S.IP
    </h3>

    <p style="
        margin-top:2px;
        margin-bottom:0;
    ">
        Lurah Padangiring
    </p>

</div>
<div class="garis-lurah"></div>
<h2 class="judul-sambutan">
    Sambutan Lurah
</h2>
 <div class="sambutan">

            <p>

                Assalamu’alaikum Warahmatullahi Wabarakatuh.

                Selamat datang di Website Resmi Kelurahan Padangiring.

                Website ini hadir sebagai sarana informasi,
                pelayanan publik, dan komunikasi digital antara
                pemerintah kelurahan dan masyarakat.

                Dengan mengangkat budaya Toraja sebagai identitas,
                kami berkomitmen menghadirkan pelayanan yang modern,
                transparan, cepat, dan mudah diakses oleh masyarakat.

                Semoga website ini dapat menjadi jembatan informasi
                yang bermanfaat dan mendukung kemajuan
                Kelurahan Padangiring.

            </p>

        </div>

        <div class="quick-menu">

            <a href="{{ url('/layanan') }}" class="quick-item">
                <div class="icon">📄</div>
                <h3>Layanan Surat</h3>
                <p>Ajukan surat secara online</p>
            </a>

            <a href="{{ url('/tracking') }}" class="quick-item">
                <div class="icon">📍</div>
                <h3>Tracking Surat</h3>
                <p>Cek status surat</p>
            </a>

            <a href="{{ url('/berita') }}" class="quick-item">
                <div class="icon">📰</div>
                <h3>Berita Kelurahan</h3>
                <p>Informasi terbaru</p>
            </a>

            <a href="{{ url('/kontak') }}" class="quick-item">
                <div class="icon">☎️</div>
                <h3>Kontak</h3>
                <p>Hubungi Kelurahan</p>
            </a>

        </div>

        <div class="stats">

            <div class="stat-box">
                <h2>{{ $totalWarga }}</h2>
                <p>Jumlah Penduduk</p>
            </div>

            <div class="stat-box">
                <h2>{{ $totalKK }}</h2>
                <p>Jumlah KK</p>
            </div>

            <div class="stat-box">
                <h2>{{ $lakiLaki }}</h2>
                <p>Laki-Laki</p>
            </div>

            <div class="stat-box">
                <h2>{{ $perempuan }}</h2>
                <p>Perempuan</p>
            </div>

        </div>

        <!-- LAYANAN -->

        <div class="section-title" style="margin-top:90px;">

            <h2>Layanan Digital</h2>

            <p>
                Pelayanan masyarakat berbasis online
            </p>

        </div>

        <div class="cards">

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Surat Domisili</h3>

                    <p>
                        Pengajuan surat domisili online
                        dengan proses cepat dan mudah.
                    </p>

                </div>

            </div>

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Surat Usaha</h3>

                    <p>
                        Pelayanan surat usaha masyarakat
                        berbasis digital.
                    </p>

                </div>

            </div>

            <div class="card">

                <div class="card-top"></div>

                <div class="card-content">

                    <h3>Tracking Surat</h3>

                    <p>
                        Cek status pengajuan surat
                        secara online dan realtime.
                    </p>

                </div>

            </div>

        </div>

        <!-- BERITA -->

<div class="section-title" style="margin-top:90px;">

    <h2>Berita Kelurahan</h2>

    <p>
        Informasi terbaru kegiatan masyarakat
    </p>

</div>

<div class="berita-grid">

@forelse($beritas as $item)

<div class="berita">

    @if($item->gambar)

        <img src="{{ asset('uploads/'.$item->gambar) }}"
             alt="{{ $item->judul }}">

    @endif

    <div class="berita-body">

        <h3>{{ $item->judul }}</h3>

        <p>

            {{ \Illuminate\Support\Str::limit($item->isi,120) }}

        </p>

        <small>

            📅 {{ $item->created_at->format('d F Y') }}

        </small>

    </div>

</div>

@empty

<p>Belum ada berita.</p>

@endforelse

</div>



    <!-- AGENDA KEGIATAN -->

<div class="section-title agenda-section">

    <h2>Agenda Kegiatan</h2>

    <p>
        Jadwal kegiatan Kelurahan Padangiring
    </p>

</div>

<div class="agenda-grid">

    <div class="agenda-card">

        <div class="agenda-tanggal">
            📅 10 Juli 2026
        </div>

        <h3>Kerja Bakti Lingkungan</h3>

        <p>
            Kegiatan gotong royong membersihkan lingkungan
            bersama masyarakat Kelurahan Padangiring.
        </p>

    </div>

    <div class="agenda-card">

            <div class="agenda-tanggal">
                📅 15 Juli 2026
            </div>

            <h3>Posyandu Balita</h3>

            <p>
                Pemeriksaan kesehatan balita dan ibu hamil
                oleh tenaga kesehatan setempat.
            </p>

        </div>

        <div class="agenda-card">

            <div class="agenda-tanggal">
                📅 20 Juli 2026
            </div>

            <h3>Musrenbang Kelurahan</h3>

            <p>
                Musyawarah perencanaan pembangunan
                bersama masyarakat dan pemerintah.
            </p>

        </div>

    </div>
    
    <!-- PETA WILAYAH -->

        <div class="section-title map-section">
            <h2>Peta Wilayah</h2>
            <p>Lokasi Kantor Kelurahan Padangiring</p>
        </div>

        <div class="map-container">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4943.8214871695745!2d119.82511669999998!3d-3.0658011999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93ed000ca933e1%3A0xd8bf1621727d1f06!2sKantor%20Kelurahan%20Padangiring!5e1!3m2!1sid!2sid!4v1781457456036!5m2!1sid!2sid"
                width="100%"
                height="500"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

        <!-- COUNTER PENGUNJUNG -->

        <div class="section-title visitor-section">

            <h2>Statistik Pengunjung</h2>

            <p>
                Data kunjungan website Kelurahan Padangiring
            </p>

        </div>

        <div class="visitor-grid">

            <div class="visitor-card">

                <h2>{{ $totalPengunjung }}</h2>

                <p>👥 Total Pengunjung</p>

            </div>

            <div class="visitor-card">

                <h2>{{ $pengunjungHariIni }}</h2>

                <p>📅 Pengunjung Hari Ini</p>

            </div>

        </div>

        <!-- VIDEO PROFIL -->

    <div class="section-title video-section">

        <h2>Video Profil Kelurahan</h2>

        <p>
            Mengenal lebih dekat Kelurahan Padangiring
        </p>

    </div>

    <div class="video-container">

    <iframe
        width="100%"
        height="550"
        src="https://www.youtube.com/embed/Cns40JmaAZY"
        title="Video Profil Kelurahan Padangiring"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>

    <div class="video-desc">

        <h3 style="color:#8B0000;margin-bottom:15px;">
            Video Profil Kelurahan Padangiring
        </h3>

        <p style="font-size:17px;line-height:1.9;">

            Saksikan video dokumentasi Kelurahan Padangiring yang menampilkan
            kondisi wilayah, kegiatan masyarakat, pelayanan publik,
            pembangunan, serta potensi daerah sebagai bentuk transparansi
            dan informasi kepada masyarakat.

        </p>

    </div>

</div>
    <!-- FOOTER -->

    <div class="footer">

        <h3>Kelurahan Padangiring</h3>

        <p>
            Website Resmi Pelayanan berbasis digital.
        </p>

        <br>

        <p>
            © 2026 Kelurahan Padangiring
        </p>

    </div>
        <a
        href="https://wa.me/082348697468"
        class="wa-float"
        target="_blank">

        💬

        </a>
</body>
</html>