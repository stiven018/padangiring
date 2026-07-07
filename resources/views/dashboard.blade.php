<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    display:flex;
    background:#f5f5f5;
}

/* SIDEBAR */

.sidebar{

    width:240px;
    height:100vh;

    background:
    linear-gradient(
        180deg,
        #111,
        #8B0000
    );

    color:white;

    padding:30px 20px;

    position:fixed;

}

.logo{

    font-size:28px;
    font-weight:bold;
    color:#FFD700;
    margin-bottom:10px;

}

.sublogo{

    font-size:14px;
    margin-bottom:50px;
    opacity:0.8;

}

.menu a{

    display:block;

    color:white;

    text-decoration:none;

    padding:15px 18px;

    margin-bottom:10px;

    border-radius:12px;

    transition:0.3s;

    font-weight:500;

}

.menu a:hover{

    background:white;
    color:#8B0000;

    transform:translateX(5px);

}

/* CONTENT */

.content{

    margin-left:240px;

    width:100%;

    padding:40px;

}

/* TOPBAR */

.topbar{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:35px;

}

.topbar h1{

    color:#8B0000;

    font-size:45px;

}

.admin-box{

    background:white;

    padding:15px 25px;

    border-radius:15px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

    font-weight:600;

}

/* CARDS */

.cards{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

    gap:20px;

    margin-bottom:35px;

}

.card{

    background:white;

    padding:30px;

    border-radius:25px;

    box-shadow:0 10px 25px rgba(0,0,0,0.08);

}

.card h3{

    color:#8B0000;

    margin-bottom:20px;

}

.card p{

    font-size:45px;

    font-weight:bold;

}

/* TABLE */

.table-box{

    background:white;

    border-radius:25px;

    padding:30px;

    box-shadow:0 10px 25px rgba(0,0,0,0.08);

}

.table-box h2{

    color:#8B0000;

    margin-bottom:25px;

}

table{

    width:100%;

    border-collapse:collapse;

}

table th{

    background:#8B0000;

    color:white;

    padding:15px;

    text-align:left;

}

table td{

    padding:15px;

    border-bottom:1px solid #eee;

}

/* STATUS */

.status{

    padding:8px 18px;

    border-radius:50px;

    color:white;

    font-size:13px;

}

.diproses{
    background:orange;
}

.selesai{
    background:green;
}

/* FOOTER */

.footer{

    margin-top:40px;

    text-align:center;

    color:#777;

}

/* RESPONSIVE */

@media(max-width:768px){

    .sidebar{

        width:100%;
        height:auto;
        position:relative;

    }

    .content{

        margin-left:0;

    }

}

</style>

</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        PADANGIRING
    </div>

    <div class="sublogo">
        Admin Dashboard
    </div>

    <div class="menu">

       <div class="menu">

    <a href="{{ url('/dashboard') }}">
        🏠 Dashboard
    </a>

    <a href="{{ url('/admin/berita') }}">
        📰 Kelola Berita
    </a>

    <a href="{{ url('/admin/pesan') }}">
        📩 Surat Masuk
    </a>

    <a href="{{ url('/admin/warga') }}">
    👨‍👩‍👧‍👦 Data Warga
    </a>

    <a href="{{ url('/admin/tracking') }}">
    📌 Tracking Surat
    </a>

    <a href="{{ url('/admin/galeri') }}">
        🖼️ Galeri
    </a>

    <a href="{{ url('/') }}">
        🌐 Website
    </a>

    <a href="{{ url('/login') }}">
        🚪 Logout
    </a>

</div>
    </div>

</div>

<!-- CONTENT -->

<div class="content">

    <div class="topbar">

        <h1>Dashboard Admin</h1>

        <div class="admin-box">

            Admin Kelurahan

        </div>

    </div>

    <!-- CARD -->

    <div class="cards">

        <div class="card">

            <h3>Total Berita</h3>

            <p>{{ $totalBerita }}</p>

        </div>

        <div class="card">

            <h3>Surat Diproses</h3>

            <p>{{ $suratDiproses }}</p>

        </div>

        <div class="card">

            <h3>Total Tracking</h3>

            <p>{{ $totalTracking }}</p>

        </div>

        <div class="card">

            <h3>Total Warga</h3>

            <p>{{ $totalWarga }}</p>

        </div>
        <div class="card">

            <h3>Laki-Laki</h3>

            <p>{{ $lakiLaki }}</p>

        </div>

        <div class="card">

            <h3>Perempuan</h3>

            <p>{{ $perempuan }}</p>

        </div>

            </div>

    <!-- GRAFIK -->

    <div class="table-box">

    <h2>Grafik Tracking Surat 6 Bulan Terakhir</h2>

    <canvas id="trackingChart"></canvas>

    </div>

    <div class="table-box" style="margin-top:30px;">

    <h2>Statistik Penduduk</h2>

    <div style="
        width:350px;
        height:350px;
        margin:auto;
    ">
        <canvas id="grafikPenduduk"></canvas>
    </div>

    </div>

<div class="table-box" style="margin-top:30px;">

    <h2>Statistik Agama Penduduk</h2>

    <canvas id="grafikAgama" height="120"></canvas>

</div>
    <div class="footer">

        © 2026 Kelurahan Padangiring

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(){

const ctx = document.getElementById('trackingChart');

new window.Chart(ctx,{

    type: 'bar',

    data: {

       labels: @json($bulan),

        datasets: [{

            label: 'Jumlah Surat',

            data: @json($jumlahSurat),

            backgroundColor: [
                '#8B0000',
                '#A52A2A',
                '#B22222',
                '#DC143C',
                '#CD5C5C',
                '#800000'
            ]

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {
                display: true
            }

        }

    }

});
});
</script>


<script>

const ctxPenduduk =
document.getElementById('grafikPenduduk');

new window.Chart(ctxPenduduk, {

    type: 'pie',

    data: {

        labels: [
            'Laki-Laki',
            'Perempuan'
        ],

        datasets: [{

            data: [
                {{ $lakiLaki }},
                {{ $perempuan }}
            ],

            backgroundColor: [
                '#8B0000',
                '#FFD700'
            ]

        }]

    },
    options: {

    responsive: true,

    maintainAspectRatio: false,

    plugins: {

        legend: {

            position: 'bottom'

        }

    }

}

});

const ctxAgama =
document.getElementById('grafikAgama');

new window.Chart(ctxAgama, {

    type: 'bar',

    data: {

        labels: @json($agamaLabels ?? []),

        datasets: [{

            label: 'Jumlah Penduduk',

            data: @json($agamaData ?? []),

            backgroundColor: [
                            '#8B0000',
                            '#A52A2A',
                            '#B22222',
                            '#CD5C5C',
                            '#FFD700'
]

        }]

    },

    options: {

        responsive: true

    }

});

</script>
</body>
</html>