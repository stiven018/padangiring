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
    font-size:15px;
}

.judul h3{
    margin:0;
    font-size:15px;
}

.judul p{
    margin:0;
}

.garis{
    border-bottom:3px solid black;
    margin-top:3px;
    margin-bottom:18px;
}

.isi td{
    padding:3px;
}

.ttd{
    width:100%;
    margin-top:70px;
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

<u>SURAT KETERANGAN TIDAK MAMPU</u>

</h3>

<p align="center">

Nomor : {{ $surat->nomor_surat }}

</p>

<br>

Yang bertanda tangan dibawah ini :

<br><br>

<table class="isi">

<tr>
<td width="180">Nama</td>
<td>: YULITA BOROTODING, S.IP</td>
</tr>

<tr>
<td>NIP</td>
<td>: 197708172007022020</td>
</tr>

<tr>
<td>Jabatan</td>
<td>: Lurah</td>
</tr>

</table>

<br>

Menerangkan bahwa :

<br>

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
<td>Tempat/Tgl Lahir</td>
<td>:
    {{ $surat->tempat_lahir }},
    {{ \Carbon\Carbon::parse($surat->tanggal_lahir)->translatedFormat('d F Y') }}
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: {{ $surat->jenis_kelamin }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>: {{ $surat->alamat }}</td>
</tr>

</table>

<br>

Adalah penduduk Kelurahan Padangiring, Kecamatan Rantetayo dan benar-benar merupakan

<b>KELUARGA TIDAK MAMPU.</b>

<br><br>

Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.

<table class="ttd">

<tr>

<td width="60%"></td>

<td align="center">

Padangiring, {{ date('d F Y') }}

<br><br>

LURAH

<br><br><br><br>

<span style="border-bottom:1px solid #000; font-weight:bold;">
YULITA BOROTODING, S.IP
</span>

<br>

NIP. 19701231 199303 2 001

</td>

</tr>

</table>

</body>

</html>