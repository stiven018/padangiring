<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Galeri Kelurahan Padangiring</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f5f5;
}

/* NAVBAR */

.navbar{
    background:#111;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:#FFD700;
    font-size:30px;
    font-weight:700;
}

.navbar ul{
    display:flex;
    list-style:none;
}

.navbar ul li{
    margin-left:25px;
}

.navbar ul li a{
    color:white;
    text-decoration:none;
    transition:.3s;
}

.navbar ul li a:hover{
    color:#FFD700;
}

/* HERO */

.hero{

    height:60vh;

    background:
    linear-gradient(
        rgba(0,0,0,.65),
        rgba(0,0,0,.65)
    ),
    url('/images/profil kantor lurah.jpeg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero h1{
    font-size:65px;
    color:#FFD700;
}

.hero p{
    margin-top:15px;
    font-size:22px;
}

/* MOTIF TORAJA */

.motif{
    height:12px;

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

/* CONTENT */

.container{
    width:90%;
    max-width:1300px;
    margin:auto;
    padding:80px 0;
}

.title{
    text-align:center;
    margin-bottom:60px;
}

.title h2{
    color:#8B0000;
    font-size:45px;
}

.title p{
    color:#666;
    margin-top:10px;
}

/* GALERI */

.galeri-grid{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

}

.card{

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:
    0 10px 25px rgba(0,0,0,.08);

    transition:.4s;

    display:flex;
    flex-direction:column;
}

.card:hover{

    transform:translateY(-10px);

}

.card img{

    width:100%;

    aspect-ratio:1/1;

    object-fit:cover;

    display:block;

    transition:0.5s;
}

.card:hover img{

    transform:scale(1.08);
}

.card-content{

    padding:20px;
}

.card-content h3{

    color:#8B0000;
    margin-bottom:10px;
}

.card-content p{

    color:#666;
    font-size:14px;
}

/* KOSONG */

.empty{

    text-align:center;

    background:white;

    padding:50px;

    border-radius:20px;

    color:#666;
}

/* FOOTER */

.footer{

    background:#111;

    color:white;

    text-align:center;

    padding:50px 20px;

    margin-top:80px;
}

.footer h3{
    color:#FFD700;
}

/* RESPONSIVE */

@media(max-width:768px){

    .navbar{
        flex-direction:column;
    }

    .navbar ul{
        margin-top:15px;
        flex-wrap:wrap;
        justify-content:center;
    }

    .hero h1{
        font-size:40px;
    }

    .hero p{
        font-size:18px;
    }

}

@media(max-width:768px){

    .galeri-grid{

        grid-template-columns:repeat(1,1fr);

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

<div class="hero">

    <div>

        <h1>Galeri Kegiatan</h1>

        <p>
            Dokumentasi kegiatan dan pelayanan
            Kelurahan Padangiring
        </p>

    </div>

</div>

<div class="motif"></div>

<!-- GALERI -->

<div class="container">

    <div class="title">

        <h2>Galeri Kelurahan Padangiring</h2>

        <p>
            Kumpulan foto kegiatan masyarakat dan pemerintahan kelurahan
        </p>

    </div>

    @if(count($galeris) > 0)

    <div class="galeri-grid">

        @foreach($galeris as $galeri)

        <div class="card">

            <img src="{{ asset('galeri/'.$galeri->foto) }}"
                 alt="{{ $galeri->judul }}">

            <div class="card-content">

    <h3>{{ $galeri->judul }}</h3>

    <div style="
        margin-top:10px;
        font-size:14px;
        color:#666;
        line-height:1.8;
    ">

        <div>
            👤 <b>Admin</b>
        </div>

        <div>
            📅 {{ $galeri->created_at->format('d F Y') }}
        </div>

    </div>

</div>

        </div>

        @endforeach

    </div>

    @else

    <div class="empty">

        <h3>Belum ada foto kegiatan.</h3>

        <p>
            Foto yang diupload admin akan muncul di sini.
        </p>

    </div>

    @endif

</div>

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
```
