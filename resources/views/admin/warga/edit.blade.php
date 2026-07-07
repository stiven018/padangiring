<!DOCTYPE html>

<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Data Warga</title>

<style>

body{
    font-family:Poppins,sans-serif;
    background:#f5f5f5;
    padding:30px;
}

.container{
    max-width:800px;
    margin:auto;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
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
    margin-bottom:12px;
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

.kembali{
    text-decoration:none;
    background:#444;
    color:white;
    padding:10px 15px;
    border-radius:8px;
    display:inline-block;
    margin-bottom:20px;
}

</style>

</head>
<body>

<div class="container">

<div class="card">

<a href="{{ url('/admin/warga') }}" class="kembali">
← Kembali
</a>

<h2>Edit Data Warga</h2>

<form method="POST" action="{{ url('/admin/warga/update/'.$warga->id) }}">

@csrf

<input
type="text"
name="nik"
value="{{ $warga->nik }}"
required>

<input
type="text"
name="nama"
value="{{ $warga->nama }}"
required>

<select name="jenis_kelamin">

<option value="Laki-laki"
{{ $warga->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
Laki-laki
</option>

<option value="Perempuan"
{{ $warga->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
Perempuan
</option>

</select>

<input
type="text"
name="tempat_lahir"
value="{{ $warga->tempat_lahir }}">

<input
type="date"
name="tanggal_lahir"
value="{{ $warga->tanggal_lahir }}">

<input
type="text"
name="agama"
value="{{ $warga->agama }}">

<input
type="text"
name="no_kk"
value="{{ $warga->no_kk }}"
placeholder="Nomor KK">

<input
type="text"
name="pendidikan"
value="{{ $warga->pendidikan }}"
placeholder="Pendidikan">

<input
type="text"
name="status_hubungan"
value="{{ $warga->status_hubungan }}"
placeholder="Status Hubungan Keluarga">

<input
type="text"
name="nama_ayah"
value="{{ $warga->nama_ayah }}"
placeholder="Nama Ayah">

<input
type="text"
name="nama_ibu"
value="{{ $warga->nama_ibu }}"
placeholder="Nama Ibu">

<input
type="text"
name="rt"
value="{{ $warga->rt }}"
placeholder="RT">

<input
type="text"
name="rw"
value="{{ $warga->rw }}"
placeholder="RW">

<input
type="text"
name="dusun"
value="{{ $warga->dusun }}"
placeholder="Dusun">

<input
type="text"
name="pekerjaan"
value="{{ $warga->pekerjaan }}">

<textarea name="alamat">{{ $warga->alamat }}</textarea>

<button type="submit">
Update Data Warga
</button>

</form>

</div>

</div>

</body>
</html>
