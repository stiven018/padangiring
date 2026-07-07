<!DOCTYPE html>

<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Warga</title>

<style>

body{
    font-family:Poppins,sans-serif;
    background:#f5f5f5;
    padding:30px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    margin-bottom:20px;
}

h2{
    color:#8B0000;
    margin-bottom:20px;
}

input,
select,
textarea{
    width:100%;
    padding:12px;
    margin-bottom:10px;
    border:1px solid #ddd;
    border-radius:8px;
}

button{
    background:#8B0000;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:8px;
    cursor:pointer;
}

.tabel-wrapper{
    width:100%;
    overflow:auto;
    max-height:650px;
    border:1px solid #ddd;
    border-radius:8px;
    position:relative;
}

.tabel-wrapper::-webkit-scrollbar{
    width:12px;
    height:12px;
}

.tabel-wrapper::-webkit-scrollbar-track{
    background:#ececec;
    border-radius:10px;
}

.tabel-wrapper::-webkit-scrollbar-thumb{
    background:#999;
    border-radius:10px;
}

.tabel-wrapper::-webkit-scrollbar-thumb:hover{
    background:#666;
}

.tabel-warga{
    border-collapse:collapse;
    width:max-content;
    min-width:2500px;
}

.tabel-warga th{
    background:#8B0000;
    color:white;
    padding:14px;
    text-align:center;
}

.tabel-warga thead th{
    position:sticky;
    top:0;
    background:#8B0000;
    color:white;
    z-index:999;
}

.tabel-warga td{
    padding:14px;
    border-bottom:1px solid #ddd;
    text-align:center;
    vertical-align:middle;
}

.tabel-warga tr:hover{
    background:#fafafa;
}

.aksi{
    display:flex;
    justify-content:center;
    gap:8px;
}

.detail,
.edit,
.hapus{
    color:white;
    text-decoration:none;
    padding:8px 12px;
    border-radius:6px;
    font-size:13px;
    white-space:nowrap;
}

.detail{
    background:#0d6efd;
}

.edit{
    background:#f59e0b;
}

.hapus{
    background:#dc2626;
}

.tabel-warga th{
    background:#8B0000;
    color:white;
    padding:14px;
    text-align:center;
}

.tabel-warga td{
    padding:12px;
    border-bottom:1px solid #ddd;
    text-align:center;
    vertical-align:middle;
    word-wrap:break-word;
}

.tabel-warga td{
    white-space:nowrap;
}

.tabel-warga tr:hover{
    background:#f9f9f9;
}

.aksi{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:8px;
    flex-wrap:nowrap;
    min-width:240px;
}

.detail,
.edit,
.hapus{
    text-decoration:none;
    color:white;
    padding:7px 10px;
    border-radius:6px;
    font-size:13px;
    white-space:nowrap;
}

.detail{
    background:#0d6efd;
}

.edit{
    background:#f59e0b;
}

.hapus{
    background:#dc2626;
}


/* Header */
table th{
    background:#8B0000;
    color:white;
    padding:15px;
    text-align:center;
}

/* Isi Tabel */
table td{
    padding:15px;
    border-bottom:1px solid #ddd;
    vertical-align:middle;
}


/* Tombol Aksi */
.aksi{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:6px;
    flex-wrap:nowrap;
}

.detail,
.edit,
.hapus{
    padding:6px 10px;
    font-size:13px;
    border-radius:6px;
    text-decoration:none;
    color:white;
}

.detail{
    background:#0d6efd;
}

.edit{
    background:#f59e0b;
}

.hapus{
    background:#dc2626;
}

.kembali{
    float:right;
    text-decoration:none;
    background:#444;
    color:white;
    padding:10px 15px;
    border-radius:8px;
}

.success{
    background:#d4edda;
    color:#155724;
    padding:15px;
    border-radius:8px;
    margin-bottom:15px;
}

.error{
    background:#ffdddd;
    color:#a10000;
    padding:15px;
    border-radius:8px;
    margin-bottom:15px;
}




</style>

</head>
<body>

<div class="container">

<div class="card">

<a href="{{ url('/dashboard') }}" class="kembali">
← Dashboard
</a>

<h2>Data Warga Kelurahan Padangiring</h2>

@if(session('success'))

<div class="success">

{{ session('success') }}

</div>

@endif

@if(session('error'))

<div class="error">

{{ session('error') }}

</div>

@endif

@if ($errors->any())

<div class="error">

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form method="POST" action="{{ url('/admin/warga/store') }}">
@csrf

<input
type="text"
name="nik"
placeholder="Masukkan NIK 16 Digit"
maxlength="16"
pattern="[0-9]{16}"
title="NIK harus 16 digit angka"
required

>

<input
type="text"
name="nama"
placeholder="Nama Lengkap"
required

>

<select name="jenis_kelamin" required>

<option value="">
Pilih Jenis Kelamin
</option>

<option value="Laki-laki">
Laki-laki
</option>

<option value="Perempuan">
Perempuan
</option>

</select>

<input
type="text"
name="tempat_lahir"
placeholder="Tempat Lahir"

>

<input
type="date"
name="tanggal_lahir"

>

<input
type="text"
name="agama"
placeholder="Agama"
>

<input
type="text"
name="no_kk"
placeholder="Masukkan No KK 16 Digit"
maxlength="16"
pattern="[0-9]{16}"
title="Nomor KK harus 16 digit angka"
required
>

<input
type="text"
name="pendidikan"
placeholder="Pendidikan Terakhir"
>

<input
type="text"
name="status_hubungan"
placeholder="Status Hubungan Keluarga"
>

<input
type="text"
name="nama_ayah"
placeholder="Nama Ayah"
>

<input
type="text"
name="nama_ibu"
placeholder="Nama Ibu"
>

<div style="display:flex; gap:10px;">

<input
type="text"
name="rt"
placeholder="RT"
>

<input
type="text"
name="rw"
placeholder="RW"
>

</div>

<input
type="text"
name="dusun"
placeholder="Dusun"
>

<input
type="text"
name="pekerjaan"
placeholder="Pekerjaan"
>

<textarea
    name="alamat"
    placeholder="Alamat"
></textarea>

<button type="submit">

Simpan Data Warga

</button>

</form>

</div>

<div class="card">

<h2>Daftar Warga</h2>
<form
method="POST"
action="{{ url('/admin/warga/import') }}"
enctype="multipart/form-data"
style="margin-bottom:20px;"
>

@csrf

<input
type="file"
name="file"
required
style="
width:300px;
display:inline-block;
">

<button type="submit">
📤 Import Excel
</button>

</form>
<a
href="{{ url('/admin/warga/pdf') }}"
target="_blank"
style="
background:green;
color:white;
padding:10px 15px;
text-decoration:none;
border-radius:8px;
display:inline-block;
margin-bottom:15px;
">

📄 Cetak PDF Data Warga

</a>
<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

    <form method="GET" action="{{ url('/admin/warga') }}">

        <input
            type="text"
            name="keyword"
            placeholder="Cari Nama atau NIK..."
            value="{{ $keyword ?? '' }}"
            style="width:300px;display:inline-block;">

        <button type="submit">
            Cari
        </button>

        <a
            href="{{ url('/admin/warga') }}"
            style="
            background:#444;
            color:white;
            padding:12px 20px;
            text-decoration:none;
            border-radius:8px;
            margin-left:5px;">
            Reset
        </a>

    </form>

    <form
        action="{{ url('/admin/warga/hapus-semua') }}"
        method="POST"
        onsubmit="return confirm('Yakin ingin menghapus seluruh data warga?')">

        @csrf
        @method('DELETE')

        <button
            type="submit"
            style="
            background:#dc2626;
            color:white;
            padding:12px 20px;
            border:none;
            border-radius:8px;
            cursor:pointer;">
            🗑 Hapus Semua Data
        </button>

    </form>

</div>

<div class="tabel-wrapper" id="tableScroll">

<table class="tabel-warga">

    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>No KK</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Status Hubungan</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>RT</th>
            <th>RW</th>
            <th>Dusun</th>
            <th>Alamat</th>
            <th style="width:280px;">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @if($wargas->count() > 0)

        @foreach($wargas as $index => $warga)

        <tr>
            <td>{{ $index + 1 }}</td>

            <td>{{ $warga->nik }}</td>

            <td>{{ $warga->no_kk }}</td>

            <td>{{ strtoupper($warga->nama) }}</td>

            <td>{{ $warga->jenis_kelamin }}</td>

            <td>{{ $warga->tempat_lahir }}</td>

            <td>{{ $warga->tanggal_lahir }}</td>

            <td>{{ $warga->agama }}</td>

            <td>{{ $warga->pendidikan }}</td>

            <td>{{ $warga->pekerjaan }}</td>

            <td>{{ $warga->status_hubungan }}</td>

            <td>{{ $warga->nama_ayah }}</td>

            <td>{{ $warga->nama_ibu }}</td>

            <td>{{ $warga->rt }}</td>

            <td>{{ $warga->rw }}</td>

            <td>{{ $warga->dusun }}</td>

            <td class="alamat-col">
                {{ $warga->alamat }}
            </td>

            <td>

                <div class="aksi">

                    <a
                    class="detail"
                    href="{{ url('/admin/warga/detail/'.$warga->id) }}">
                    Detail
                    </a>

                    <a
                    class="edit"
                    href="{{ url('/admin/warga/edit/'.$warga->id) }}">
                    Edit
                    </a>

                    <a
                    class="hapus"
                    href="{{ url('/admin/warga/delete/'.$warga->id) }}"
                    onclick="return confirm('Hapus data warga?')">
                    Hapus
                    </a>

                </div>

            </td>

        </tr>

        @endforeach

    @else

        <tr>
            <td colspan="18" style="text-align:center;">
                Data warga tidak ditemukan
            </td>
        </tr>

    @endif

    </tbody>

</table>

</div>

</div>



</body>
</html>
