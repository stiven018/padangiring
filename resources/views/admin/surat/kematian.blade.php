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
    margin-bottom:18px;
}

.isi td{
    padding:3px;
    vertical-align:top;
}

.ttd{
    width:100%;
    margin-top:60px;
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

<u>SURAT KETERANGAN KEMATIAN</u>

</h3>

<p align="center">

Nomor : 568.47/KR-KP/VII/{{ date('Y') }}

</p>

<br>

Yang bertanda tangan dibawah ini Kepala Kelurahan Padangiring menerangkan bahwa :

<br><br>

<table class="isi">

<tr>
<td width="220">Nama</td>
<td>: {{ $surat->nama_meninggal }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: {{ $surat->jk_meninggal }}</td>
</tr>

<tr>
<td>Tempat/Tanggal Lahir</td>
<td>: {{ $surat->tempat_lahir_meninggal }},
{{ $surat->tanggal_lahir_meninggal }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>: {{ $surat->alamat_meninggal }}, Kel. Padangiring, Kec. Rantetayo</td>
</tr>

</table>

<br>

Bahwa yang tersebut namanya di atas benar-benar telah meninggal dunia pada :

<br><br>

<table class="isi">

<tr>
<td width="220">Tanggal</td>
<td>: {{ $surat->tanggal_kematian }}</td>
</tr>

<tr>
<td>Disebabkan karena</td>
<td>: {{ $surat->penyebab_kematian }}</td>
</tr>

<tr>
<td>Di</td>
<td>: {{ $surat->tempat_kematian }}</td>
</tr>

</table>

<br>

Yang melapor :

<br><br>

<table class="isi">

<tr>
<td width="220">Nama</td>
<td>: {{ $surat->nama_pelapor }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: {{ $surat->jk_pelapor }}</td>
</tr>

<tr>
<td>Tempat/Tgl Lahir / Umur</td>
<td>: {{ $surat->ttl_pelapor }}</td>
</tr>

<tr>
<td>Alamat</td>
<td>: {{ $surat->alamat_pelapor }}</td>
</tr>

<tr>
<td>Hubungan Keluarga</td>
<td>: {{ $surat->hubungan_keluarga }}</td>
</tr>

</table>

<br>

Demikian surat keterangan ini dibuat agar dapat dipergunakan sebagaimana mestinya.

<table class="ttd">

<tr>

<td width="60%"></td>

<td align="center">

Padangiring, {{ date('d F Y') }}

<br><br>

LURAH

<br><br><br><br>

<b>YULITA BOROTODING, S.IP</b><br>

NIP. 197708172007022020

</td>

</tr>

</table>

</body>
</html>