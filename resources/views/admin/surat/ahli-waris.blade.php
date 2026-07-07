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
.ttd{
    page-break-inside: avoid;
}

.kop{
    width:100%;
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

<u>SURAT KETERANGAN AHLI WARIS</u>

</h3>

<p align="center">

Nomor : 470/KR-KP/VII/{{ date('Y') }}

</p>

<br>

Yang bertanda tangan di bawah ini, Lurah Padangiring kecamatan Rantetayo Kabupaten Tana Toraja menerangkan bahwa:
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
    <td>Tanggal Lahir</td>
    <td>: {{ $surat->tanggal_lahir }}</td>
</tr>

<tr>
    <td>Pekerjaan</td>
    <td>: {{ $surat->pekerjaan }}</td>
</tr>

<tr>
    <td>Alamat</td>
    <td>: {{ $surat->alamat }}',kelurahan Padangiring, Kecamatan Rantetayo</td>
</tr>

</table>

<br>

Nama tersebut di atas adalah benar-benar Ahli Waris dari
<b>{{ $surat->status_pewaris }} {{ $surat->nama_pewaris }}</b>.

<br><br>

Data keluarga yang ditinggalkan sebagai ahli waris:
<br>

<table border="1" cellpadding="5" cellspacing="0" width="100%">

<tr align="center">

    <th>No</th>

    <th>Nama Lengkap</th>

    <th>NIK</th>

    <th>Tanggal Lahir</th>

    <th>Hubungan</th>

</tr>

@foreach($surat->ahliWaris as $item)

<tr>

    <td align="center">{{ $loop->iteration }}</td>

    <td>{{ $item->nama }}</td>

    <td>{{ $item->nik }}</td>

    <td>{{ $item->tanggal_lahir }}</td>

    <td>{{ $item->hubungan }}</td>

</tr>

@endforeach

</table>
<br><br>

<p style="text-align:justify; line-height:1.4;">
    Demikian Surat Keterangan Ahli Waris ini diberikan dengan sebenarnya,
    apabila keterangan yang kami berikan tidak benar,
    kami bersedia dituntut sesuai hukum yang berlaku.
</p>

<br>

<table width="100%" class="ttd">>

<tr>

    <td width="45%" align="center">

        <b>CAMAT RANTETAYO</b>

    </td>

    <td width="10%"></td>

    <td width="45%" align="center">

        Padangiring, {{ date('d F Y') }}

        <br><br>

        <b>LURAH,</b>

    </td>

</tr>

<tr>

    <td height="45"></td>

    <td></td>

    <td></td>

</tr>

<tr>

    <td align="center">

        <b><u>VIKTOR LALONG PAYUNG</u></b>

        <br>

        NIP. 197507122010041004

    </td>

    <td></td>

    <td align="center">

        <b><u>YULITA BOROTODING, S.IP</u></b>

        <br>

        NIP. 19770817 200702 2 020

    </td>

</tr>

</table>

<br>

<table width="100%">

<tr>

<td width="45%">

<b>Saksi I</b><br><br>

{{ $surat->saksi1 }}

</td>

<td width="10%"></td>

<td width="45%" align="center">

(........................................)

</td>

</tr>

<tr>

<td>

<br>

<b>Saksi II</b><br><br>

{{ $surat->saksi2 }}

</td>

<td></td>

<td align="center">

<br><br>

(........................................)

</td>

</tr>

</table>