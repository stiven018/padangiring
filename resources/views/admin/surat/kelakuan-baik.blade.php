<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">

<style>

body{
    font-family:"Times New Roman",serif;
    font-size:15px;
    margin:35px;
    line-height:1.45;
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
    margin-bottom:10px;
}

.isi{
    margin-top:10px;
}

.isi td{
    padding:2px;
    vertical-align:top;
}

.ttd{
    width:100%;
    margin-top:10px;
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

<b style="font-size:17px;">
<u>SURAT KETERANGAN KELAKUAN BAIK</u>
</b>

<br>

<p align="center">
Nomor : {{ $surat->nomor_surat }}
</p>

</center>

<br><br>

Yang bertanda tangan di bawah ini :

<table class="isi">

<tr>
<td width="180">Nama</td>
<td width="20">:</td>
<td>YULITA BOROTODING, S.IP</td>
</tr>

<tr>
<td>Jabatan</td>
<td>:</td>
<td>Lurah</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td>Padangiring</td>
</tr>

</table>

<br>

Menerangkan bahwa :

<table class="isi">

<tr>
<td width="180">Nama</td>
<td width="20">:</td>
<td>{{ strtoupper($surat->nama) }}</td>
</tr>

<tr>
<td>NIK</td>
<td>:</td>
<td>{{ $surat->nik }}</td>
</tr>

<tr>
<td>Tempat/Tgl. Lahir</td>
<td>:</td>
<td>
{{ $surat->tempat_lahir }},
{{ \Carbon\Carbon::parse($surat->tanggal_lahir)->translatedFormat('d F Y') }}
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>{{ $surat->jenis_kelamin }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td>
{{ $surat->alamat }},
Kelurahan Padangiring
</td>
</tr>

</table>

<br>

Adalah benar-benar warga masyarakat Kelurahan Padangiring,
Kecamatan Rantetayo, dan yang bersangkutan
<b>TIDAK PERNAH</b>
terlibat dalam tindak kejahatan pidana ataupun pelanggaran hukum
(<b>Berkelakuan Baik</b>) sampai saat ini.


Demikian Surat Keterangan ini dibuat dan diberikan kepada yang
bersangkutan untuk dipergunakan sebagaimana mestinya.

<table class="ttd">

<tr>

<td width="55%"></td>

<td>

Padangiring,
{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

<br>

Lurah,

<br><br><br>

<b><u>YULITA BOROTODING, S.IP</u></b>

<br>

NIP. 19770817 200702 2 020

</td>

</tr>

</table>

<table style="width:100%; margin-top:20px;">

<tr>

<td align="center" width="50%">

Mengetahui

<br><br>

Camat Rantetayo,

<br><br><br>

______________________

<br>

Pangkat :

<br>

NIP     :

</td>

<td align="center" width="50%">

KAPOLSEK SALUPUTTI,

<br><br><br>

______________________

</td>

</tr>

</table>

</body>
</html>