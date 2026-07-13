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

.kop td{
    vertical-align:middle;
}

.logo{
    width:140px;
}

.logo img{
    width:140px;
    margin-left:-20px;
    margin-top:-10px;
}

.judul{
    text-align:center;
    line-height:1.2;
    padding-right:100px;
}

.judul h2{
    margin:0;
    font-size:20px;
}

.judul h3{
    margin:0;
    font-size:18px;
}

.judul p{
    margin:2px 0;
}

.garis{
    border-bottom:3px solid black;
    margin-top:5px;
    margin-bottom:20px;
}

.isi td{
    padding:2px;
    vertical-align:top;
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

<table width="100%" style="line-height:1.5;">

<tr>

<td width="55%" valign="top">

<table style="width:auto; border-collapse:collapse;">

<tr>
<td width="70">Nomor</td>
<td width="10">:</td>
<td>{{ $surat->nomor_surat }}</td>
</tr>

<tr>
<td>Perihal</td>
<td>:</td>
<td><b><u>Permohonan Izin Keramaian</u></b></td>
</tr>

</table>

</td>

<td width="45%" valign="top" align="left">

Padangiring, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

<br><br>

Kepada,

<br>

Yth. Bapak Camat Rantetayo

<br>

Di -

<br>

<b><u>Rantetayo</u></b>

</td>

</tr>

</table>

<br>

<p style="text-align:justify; line-height:1.8; text-indent:40px;">
Berdasarkan laporan dari keluarga tentang perihal dimaksud di atas,maka 
dengan ini kami mohon diberikan izin kepada:
</p>

<table class="isi">

<tr>
<td width="180">Nama</td>
<td>: {{ $surat->nama }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: {{ $surat->jenis_kelamin }}</td>
</tr>

<tr>
<td>Tempat / Tanggal Lahir</td>
<td>: {{ $surat->tempat_lahir }}, {{ \Carbon\Carbon::parse($surat->tanggal_lahir)->translatedFormat('d F Y') }}</td>
</tr>

<tr>
<td>Agama</td>
<td>: {{ $surat->agama }}</td>
</tr>

<tr>
<td>Pekerjaan</td>
<td>: {{ $surat->pekerjaan }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>: {{ $surat->alamat }}, Kelurahan Padangiring, Kecamatan Rantetayo</td>
</tr>

<tr>
<td>No. HP</td>
<td>: {{ $surat->no_hp }}</td>
</tr>
</table>
<br>

<p style="text-align:justify; line-height:1.8;">
Untuk melaksanakan upacara adat yakini  :
</p>

<table class="isi">

<tr>
<td width="180">Jenis Upacara</td>
<td>: {{ $surat->jenis_upacara }}</td>
</tr>

<tr>
<td>Hari</td>
<td>: {{ $surat->hari_pelaksanaan }}</td>
</tr>

<tr>
<td>Tanggal Pelaksanaan</td>
<td>: {{ \Carbon\Carbon::parse($surat->tanggal_pelaksanaan)->translatedFormat('d F Y') }}</td>
</tr>

<tr>
<td>Tempat Pelaksanaan</td>
<td>: {{ $surat->tempat_pelaksanaan }}</td>
</tr>

<tr>
<td>Upacara Adat / Agama</td>
<td>: {{ $surat->agama_upacara }}</td>
</tr>

</table>

<br>

<p style="text-align:justify; line-height:1.8;">
Demikian permohonan ini saya buat dengan sebenarnya. Atas perhatian dan bantuan Bapak, saya ucapkan terima kasih.
</p>


<table width="100%" style="margin-top:35px;">

<tr>

<td width="55%"></td>

<td width="45%" align="center">

Padangiring,
{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

<br><br>

<b>LURAH,</b>

<br><br><br><br>

<b><u>YULITA BOROTODING, S.IP</u></b>

<br>

NIP. 19770817 200702 2 020

</td>

</tr>

</table>

</body>
</html>