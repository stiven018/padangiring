<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Data Warga Kelurahan Padangiring</title>

    <style>

    body{
        font-family: Arial, sans-serif;
        font-size:12px;
    }

    .header{
        text-align:center;
        margin-bottom:20px;
    }

    .header h2{
        margin:0;
    }

    .header p{
        margin:3px 0;
    }

    table{
        width:100%;
        border-collapse:collapse;
        margin-top:15px;
    }

    table,
    th,
    td{
        border:1px solid black;
    }

    th{
        background:#dddddd;
    }

    th,
    td{
        padding:8px;
        text-align:center;
    }

    .ttd{
        margin-top:50px;
        text-align:right;
    }

    </style>

</head>
<body>

<div class="header">

    <h2>KELURAHAN PADANGIRING</h2>

    <p>Kecamatan Rantetayo</p>

    <p>Laporan Data Warga</p>

</div>

<table>

    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
    </tr>

    @foreach($wargas as $warga)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $warga->nik }}</td>

        <td>{{ $warga->nama }}</td>

        <td>{{ $warga->jenis_kelamin }}</td>

        <td>{{ $warga->pekerjaan }}</td>

    </tr>

    @endforeach

</table>

<div class="ttd">

    <p>Padangiring, {{ date('d-m-Y') }}</p>

    <br><br><br>

    <p><b>Lurah Padangiring</b></p>

</div>

</body>
</html>