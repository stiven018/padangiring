<!DOCTYPE html>
<html>
<head>
<title>Galeri Kelurahan</title>

<style>

body{
    font-family:Poppins;
    background:#f5f5f5;
    padding:40px;
}

.back-dashboard{

    position:fixed;

    top:20px;

    right:20px;

    background:#8B0000;

    color:white;

    padding:12px 20px;

    text-decoration:none;

    border-radius:10px;

    font-weight:600;

    z-index:9999;

}

.back-dashboard:hover{

    background:#111;

}

.box{
    background:white;
    padding:30px;
    border-radius:20px;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
}

button{
    background:#8B0000;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:10px;
}

.gallery{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
    margin-top:30px;
}

.card{

    background:#fff;

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 8px 20px rgba(0,0,0,.08);

    transition:.3s;

}

.card:hover{

    transform:translateY(-5px);

}

.card img{

    width:100%;

    height:220px;

    object-fit:cover;

    display:block;

}

.hapus{
    background:red;
    color:white;
    text-decoration:none;
    padding:8px 15px;
    border-radius:8px;
}

</style>

</head>
<body>

<a href="{{ url('/dashboard') }}"
   class="back-dashboard">
    ← Kembali Dashboard
</a>

<h1>Galeri Kegiatan Kelurahan</h1>

<div class="box">

<form
action="/admin/galeri/store"
method="POST"
enctype="multipart/form-data">

@csrf

<input
type="text"
name="judul"
placeholder="Judul Kegiatan">

<input
type="file"
name="foto">

<button type="submit">
Upload Foto
</button>

</form>

</div>

<div class="gallery">

@foreach($galeris as $galeri)

<div class="card">

<img
    src="{{ asset('galeri/'.$galeri->foto) }}"
    alt="{{ $galeri->judul }}"
    style="
        width:100%;
        height:220px;
        object-fit:cover;
        border-radius:10px;
    ">

<h3>{{ $galeri->judul }}</h3>

<a
href="/admin/galeri/delete/{{ $galeri->id }}"
class="hapus"
onclick="return confirm('Hapus foto ini?')">

Hapus

</a>

</div>

@endforeach

</div>

</body>
</html>