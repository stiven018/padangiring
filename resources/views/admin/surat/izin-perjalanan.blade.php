<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<style>

body{

    font-family:"Times New Roman",serif;

    font-size:16px;

    margin:35px;

    line-height:1.5;

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
    margin-top:5px;
    margin-bottom:15px;
}

.judul h2{
    margin:0;
    font-size:20px;
}

.judul h3{
    margin:0;
    font-size:18px;
    white-space: nowrap;
}
.judul p{
    margin:2px 0 0 0;
    font-size:14px;
}

.garis{
    border-bottom:3px solid black;
    margin-top:3px;
    margin-bottom:12px;
}

.center{

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

<h3 align="center"
style="
font-size:15px;
margin-top:2px;
margin-bottom:0;
font-weight:bold;
text-decoration:underline;
">
    <u>SURAT KETERANGAN IZIN PERJALANAN</u>
</h3>

<p align="center">
Nomor : {{ $surat->nomor_surat }}
</p>

<br>

Yang bertanda tangan di bawah ini :

<table style="width:100%; margin-left:18px; margin-top:5px;">

<tr>
<td width="160">Nama</td>
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

<b>Menerangkan Bahwa :</b>

<table style="width:100%; margin-left:18px; margin-top:8px;">

<tr>
<td width="160">Nama</td>
<td width="20">:</td>
<td>{{ strtoupper($surat->nama) }}</td>
</tr>

<tr>
<td>NIK</td>
<td>:</td>
<td>{{ $surat->nik }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td>{{ $surat->jenis_kelamin }}</td>
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
<td>Pekerjaan</td>
<td>:</td>
<td>{{ $surat->pekerjaan }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td>{{ $surat->alamat }}, Kel. Padangiring</td>
</tr>

</table>

<br>

<p style="text-align:justify; text-indent:35px; margin-top:8px;">

Benar yang tersebut namanya di atas berdomisili di Lingkungan
{{ $surat->alamat }}, Kelurahan Padangiring,
Kecamatan Rantetayo dan akan mengadakan perjalanan ke
<b>{{ strtoupper($surat->tujuan_perjalanan) }}</b>.
</p>


Demikian Surat Keterangan ini dibuat dan diberikan kepada yang
bersangkutan untuk dipergunakan sebagaimana mestinya.

<br><br>

<table style="width:100%;">

<tr>

<td width="55%"></td>

<td align="center">

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