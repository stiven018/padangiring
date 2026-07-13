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

.judul{
    text-align:center;
    line-height:1.2;
}

.judul h2{
    margin:0;
    font-size:20px;
}

.judul h3{
    margin:0;
    font-size:18px;
    white-space:nowrap;
}

.judul p{
    margin-top:3px;
    margin-bottom:0;
    font-size:14px;
}

.garis{
    border-bottom:3px solid black;
    margin-top:3px;
    margin-bottom:12px;
}

.isi td{
    padding:3px;
}

.ttd{
    margin-top:60px;
    width:100%;
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
<u>SURAT KETERANGAN USAHA</u>
</h3>

<p align="center">
Nomor : 400.198/KR-KP/VI/{{ date('Y') }}
</p>

<br>

Yang bertanda tangan di bawah ini :

<table class="isi">

<tr>
<td width="180">Nama</td>
<td>: YULITA BOROTODING, S.IP</td>
</tr>

<tr>
<td>Jabatan</td>
<td>: Lurah</td>
</tr>

<tr>
<td>Alamat</td>
<td>: Padangiring</td>
</tr>

</table>

<br>

Menerangkan bahwa :

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
<td>Pekerjaan</td>
<td>: {{ $surat->pekerjaan }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: {{ $surat->jenis_kelamin }}</td>
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

Yang tersebut namanya di atas benar-benar mempunyai usaha

<b>{{ $surat->jenis_usaha }}</b>

yang terletak di

<b>{{ $surat->alamat_usaha }}</b>,

Kelurahan Padangiring,

Kecamatan Rantetayo.
<br><br>
Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan dengan penuh rasa tanggung jawab.

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