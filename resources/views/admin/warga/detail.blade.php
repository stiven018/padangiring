<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Detail Data Warga</title>

<style>

body{
    font-family:Poppins,sans-serif;
    background:#f5f5f5;
    padding:30px;
}

.card{
    background:white;
    max-width:900px;
    margin:auto;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
}

h2{
    color:#8B0000;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

td{
    padding:10px;
    border-bottom:1px solid #eee;
}

.label{
    width:35%;
    font-weight:bold;
    color:#444;
}

.kembali{
    background:#444;
    color:white;
    text-decoration:none;
    padding:10px 15px;
    border-radius:8px;
}

</style>

</head>
<body>

<div class="card">

<h2>Detail Data Warga</h2>

<table>

<tr>
<td class="label">NIK</td>
<td>{{ $warga->nik }}</td>
</tr>

<tr>
<td class="label">No KK</td>
<td>{{ $warga->no_kk }}</td>
</tr>

<tr>
<td class="label">Nama Lengkap</td>
<td>{{ $warga->nama }}</td>
</tr>

<tr>
<td class="label">Jenis Kelamin</td>
<td>{{ $warga->jenis_kelamin }}</td>
</tr>

<tr>
<td class="label">Tempat Lahir</td>
<td>{{ $warga->tempat_lahir }}</td>
</tr>

<tr>
<td class="label">Tanggal Lahir</td>
<td>{{ $warga->tanggal_lahir }}</td>
</tr>

<tr>
<td class="label">Agama</td>
<td>{{ $warga->agama }}</td>
</tr>

<tr>
<td class="label">Pendidikan</td>
<td>{{ $warga->pendidikan }}</td>
</tr>

<tr>
<td class="label">Pekerjaan</td>
<td>{{ $warga->pekerjaan }}</td>
</tr>

<tr>
<td class="label">Status Hubungan Keluarga</td>
<td>{{ $warga->status_hubungan }}</td>
</tr>

<tr>
<td class="label">Nama Ayah</td>
<td>{{ $warga->nama_ayah }}</td>
</tr>

<tr>
<td class="label">Nama Ibu</td>
<td>{{ $warga->nama_ibu }}</td>
</tr>

<tr>
<td class="label">RT</td>
<td>{{ $warga->rt }}</td>
</tr>

<tr>
<td class="label">RW</td>
<td>{{ $warga->rw }}</td>
</tr>

<tr>
<td class="label">Dusun</td>
<td>{{ $warga->dusun }}</td>
</tr>

<tr>
<td class="label">Alamat</td>
<td>{{ $warga->alamat }}</td>
</tr>

</table>

<br>

<a href="{{ url('/admin/warga') }}" class="kembali">
← Kembali
</a>

</div>

</body>
</html>