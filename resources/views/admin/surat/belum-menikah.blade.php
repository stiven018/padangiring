<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>

body{
    font-family:"Times New Roman", serif;
    font-size:14px;
    margin:40px;
}

table{
    width:100%;
    border-collapse:collapse;
}

.kop{
    width:100%;
    border-collapse:collapse;
}

.kop td{
    vertical-align:middle;
}

.logo{
    width:140px;
    text-align:left;
}

.logo img{
    width:140px;
    margin-left:-20px;   /* Geser logo ke kiri */
    margin-top:-10px;    /* Geser sedikit ke atas */
}

.judul{
    text-align:center;
    line-height:1.2;
    padding-right:100px; /* Membuat kop tepat di tengah halaman */
}

.judul h2{
    margin:0;
    font-size:18px;
}

.judul h3{
    margin:0;
    font-size:18px;
}

.judul p{
    margin:0;
}

.garis{
    border-bottom:3px solid black;
    margin-top:3px;
    margin-bottom:15px;
}

.isi td{
    padding:3px;
}

.ttd{
    width:100%;
    margin-top:50px;
}

</style>

</head>

<body>

<table class="kop">

<tr>

<td class="logo">

<img src="{{ public_path('logo/logo-padangiring.png') }}">

</td>

<td class="judul">

<h3>PEMERINTAH KABUPATEN TANA TORAJA</h3>

<h3>KECAMATAN RANTETAYO</h3>

<h2>KELURAHAN PADANGIRING</h2>

<p>Jl. Bandar Udara Pongtiku - Rantetayo, Kode Pos 91862</p>

</td>

</tr>

</table>

<div class="garis"></div>

<h3 align="center">

<u>SURAT KETERANGAN BELUM MENIKAH</u>

</h3>

<p align="center">

Nomor : 207/KR-KP/VI/{{ date('Y') }}

</p>

<br>

Yang bertanda tangan di bawah ini Kepala Kelurahan Padangiring menerangkan bahwa :

<br><br>

<table class="isi">

<tr>

<td width="180">Nama</td>

<td>: {{ $surat->nama }}</td>

</tr>

<tr>

<td>NIK</td>

<td>: {{ $surat->nik }}</td>

</tr>

<tr>

<td>Jenis Kelamin</td>

<td>: {{ $surat->jenis_kelamin }}</td>

</tr>

<tr>

<td>Tempat/Tgl Lahir</td>

<td>: {{ $surat->tempat_lahir }}, {{ $surat->tanggal_lahir }}</td>

</tr>

<tr>

<td>Pekerjaan</td>

<td>: {{ $surat->pekerjaan }}</td>

</tr>

<tr>

<td>Agama</td>

<td>: {{ $surat->agama }}</td>

</tr>

<tr>

<td>Alamat</td>

<td>: {{ $surat->alamat }}</td>

</tr>

</table>

<br>

Bahwa nama tersebut di atas adalah benar penduduk Kelurahan Padangiring, Kecamatan Rantetayo, Kabupaten Tanah Toraja dan sampai surat ini dibuat yang bersangkutan

<b>BELUM PERNAH MENIKAH.</b>

<br><br>

Demikian surat keterangan ini kami buat dan berikan kepada yang bersangkutan untuk di pergunakan sebagaimana mestinya.

<table class="ttd">

<tr>

<td width="60%"></td>

<td align="center">

Padangiring, {{ date('d F Y') }}

<br><br>

LURAH

<br><br><br><br>

<b>YULITA BOROTODING, S.IP</b>

</td>

</tr>

</table>

</body>

</html>