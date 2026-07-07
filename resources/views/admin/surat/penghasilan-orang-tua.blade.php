<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">

<style>

body{
    font-family:"Times New Roman", serif;
    font-size:15px;
    margin:35px;
    line-height:1.4;
}

table{
    width:100%;
    border-collapse:collapse;
}

.kop td{
    vertical-align:middle;
}

.logo{
    width:120px;
}

.logo img{
    width:125px;
}

.judul{
    text-align:center;
    padding-right:70px;
}

.judul h2,
.judul h3{
    margin:0;
}

.judul h2{
    font-size:20px;
}

.judul h3{
    font-size:18px;
}

.judul p{
    margin:0;
    font-size:14px;
}

.garis{
    border-bottom:3px solid black;
    margin-top:5px;
    margin-bottom:12px;
}

.isi{
    margin-top:8px;
}

.isi td{
    padding:2px;
    vertical-align:top;
}

.ttd{
    width:100%;
    margin-top:35px;
}

.ttd td{
    text-align:center;
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

<center>

<b style="
font-size:16px;
font-weight:bold;
text-decoration:underline;
">
SURAT KETERANGAN PENGHASILAN ORANG TUA
</b>

<br>

<b style="font-size:14px;">
NO. 000.102/KR-KP/{{ date('Y') }}
</b>

</center>

<br>

Saya selaku orang tua yang bertanda tangan :

<table class="isi">

<tr>
<td width="220">Nama</td>
<td width="20">:</td>
<td>{{ strtoupper($surat->nama_orangtua) }}</td>
</tr>

<tr>
<td>Tempat tanggal lahir</td>
<td>:</td>
<td>
{{ $surat->tempat_lahir_orangtua }},
{{ \Carbon\Carbon::parse($surat->tanggal_lahir_orangtua)->translatedFormat('d F Y') }}
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<<td>{{ $surat->jenis_kelamin_orangtua }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<<td>
{{ $surat->alamat_orangtua }},
Kel. Padangiring,
Kec. Rantetayo
</td>
</tr>

<tr>
<td>No. HP</td>
<td>:</td>
<td>{{ $surat->no_hp_orangtua }}</td>
</tr>

<tr>
<td>Pekerjaan</td>
<td>:</td>
<td>{{ $surat->pekerjaan_orangtua }}</td>
</tr>

<tr>
<td>Penghasilan/Bulan</td>
<td>:</td>
<td>{{ $surat->penghasilan_bulanan }}</td>
</tr>

<tr>
<td>Jumlah Tanggungan</td>
<td>:</td>
<td>{{ $surat->jumlah_tanggungan }}</td>
</tr>

</table>

<br>

Yang merupakan orang tua dari Mahasiswa/Mahasiswi

<table class="isi">

<tr>
<td width="220">Nama</td>
<td width="20">:</td>
<td>{{ strtoupper($surat->nama_anak) }}</td>
</tr>

<tr>
<td>Tempat tanggal lahir</td>
<td>:</td>
<td>

{{ $surat->tempat_lahir_anak }},
{{ \Carbon\Carbon::parse($surat->tanggal_lahir_anak)->translatedFormat('d F Y') }}

</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>{{ $surat->jenis_kelamin_anak }}</td>
</tr>

<tr>
<td>Universitas</td>
<td>:</td>
<td>{{ $surat->universitas }}</td>
</tr>

<tr>
<td>Fakultas / Jurusan</td>
<td>:</td>
<td>{{ $surat->fakultas_jurusan }}</td>
</tr>

<tr>
<td>NIM</td>
<td>:</td>
<td>{{ $surat->nim }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td>{{ $surat->alamat_anak }}</td>
</tr>

</table>

<table class="ttd">

<tr>

<td width="55%"></td>

<td>

Padangiring,
{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

<br><br>

Lurah,

<br><br><br><br>

<b><u>YULITA BOROTODING, S.IP</u></b>

<br>

NIP. 19770817 200702 2 020

</td>

</tr>

</table>

</body>
</html>