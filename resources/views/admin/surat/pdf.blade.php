<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">

<style>

body{
    font-family:"Times New Roman", serif;
    font-size:12px;
    line-height:1.5;
    margin:25px;
}

.kop{
    width:100%;
    border-bottom:3px solid black;
    padding-bottom:8px;
}

.kop td{
    border:none;
}

.judul{
    text-align:center;
}

.data{
    width:100%;
    margin-top:10px;
}

.data td{
    border:none;
    padding:4px;
    vertical-align:top;
}

.ttd{
    margin-top:35px;
    text-align:right;
}

.nama-lurah{
    font-weight:bold;
    text-decoration:underline;
}

</style>

</head>

<body>

<table class="kop">

<tr>

<td width="110" align="center">

<img src="{{ public_path('logo/logo-padangiring.png') }}"
  width="230">

</td>

<td class="judul">

<div style="font-size:18px;font-weight:bold;">
PEMERINTAH KABUPATEN TANA TORAJA
</div>

<div style="font-size:18px;font-weight:bold;">
KECAMATAN RANTETAYO
</div>

<div style="font-size:24px;font-weight:bold;">
KELURAHAN PADANGIRING
</div>

<div style="font-size:13px;">
Jl. Bandar Udara Pongtiku - Rantetayo, Kode Pos 91862
</div>

</td>

</tr>

</table>

<br>

<div style="text-align:center;">

<h3 style="margin:0;text-decoration:underline;">
{{ strtoupper($surat->jenis_surat) }}
</h3>

<p style="margin-top:5px;">
Nomor : 400.179/KR-KP/V/2026
</p>

</div>

<br>

<p>
Yang bertanda tangan di bawah ini :
</p>

<table class="data">

<tr>
<td width="120">Nama</td>
<td width="10">:</td>
<td><strong>YULITA BOROTODING, S.IP</strong></td>
</tr>

<tr>
<td>Jabatan</td>
<td>:</td>
<td>LURAH PADANGIRING</td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td>Padangiring</td>
</tr>

</table>

<br>

<p>
Menerangkan bahwa :
</p>

<table class="data">

<tr>
<td width="120">Nama</td>
<td width="10">:</td>
<td>{{ $surat->nama }}</td>
</tr>

<tr>
<td>NIK</td>
<td>:</td>
<td>{{ $surat->nik }}</td>
</tr>

<tr>
<td>Jenis Surat</td>
<td>:</td>
<td>{{ $surat->jenis_surat }}</td>
</tr>

<tr>
<td>Keperluan</td>
<td>:</td>
<td>{{ $surat->keperluan }}</td>
</tr>

</table>

<br>

<p style="text-align:justify;">
Adalah benar warga Kelurahan Padangiring yang mengajukan
<strong>{{ $surat->jenis_surat }}</strong>
untuk keperluan
<strong>{{ $surat->keperluan }}</strong>.
</p>

<p style="text-align:justify;">
Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
</p>

<div class="ttd">

<p>
Padangiring, {{ date('d F Y') }}
</p>

<p>
<strong>LURAH,</strong>
</p>

<br><br>

<p class="nama-lurah">
YULITA BOROTODING, S.IP
</p>

<p>
NIP. 197708172007022020
</p>

</div>

</body>
</html>
