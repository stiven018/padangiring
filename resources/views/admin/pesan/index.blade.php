<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Surat Masuk</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f5f5f5;
    padding:40px;
}

.header{

    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;

}

.header h1{
    color:#8B0000;
}

.back-btn{

    background:#111;
    color:white;
    padding:12px 20px;
    border-radius:12px;
    text-decoration:none;

}

.table-box{

    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);

}

table{

    width:100%;

    border-collapse:collapse;

    table-layout:fixed;

}

table th,
table td{

    vertical-align:top;

}

table th{

    background:#8B0000;
    color:white;
    padding:18px;
    text-align:left;

}

table td{

    padding:18px;
    border-bottom:1px solid #eee;

}

.pesan-text{

    max-width:500px;

    white-space:normal;

    word-break:break-word;

    overflow-wrap:break-word;

    text-align:justify;

    line-height:1.8;

}

.delete-btn{

    background:red;
    color:white;
    padding:8px 16px;
    border-radius:10px;
    text-decoration:none;

}

</style>

</head>

<body>

<div class="header">

    <h1>Surat Masuk Masyarakat</h1>

    <a href="{{ url('/dashboard') }}"
       class="back-btn">

        ← Dashboard

    </a>

</div>

<div class="table-box">

<table>

<tr>

    <th style="width:5%">No</th>
    <th style="width:18%">Nama</th>
    <th style="width:22%">Email</th>
    <th style="width:45%">Pesan</th>
    <th style="width:10%">Aksi</th>

</tr>

@foreach($pesans as $pesan)

<tr>

    <td>{{ $loop->iteration }}</td>

   <td>{{ $pesan->nama }}</td>

    <td>{{ $pesan->email }}</td>

    <td class="pesan-text">
        {{ $pesan->pesan }}

    <td>

        <a href="{{ url('/admin/pesan/delete/'.$pesan->id) }}"
           class="delete-btn"
           onclick="return confirm('Yakin ingin menghapus pesan ini?')">

            Hapus

        </a>

    </td>

</tr>

@endforeach

</table>

</div>

</body>
</html>