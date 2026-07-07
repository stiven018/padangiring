<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Kelola Berita</title>

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

/* HEADER */

.header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:35px;

    flex-wrap:wrap;

    gap:15px;

}

.header h1{

    color:#8B0000;

    font-size:35px;

}

/* BUTTON GROUP */

.button-group{

    display:flex;

    gap:15px;

    flex-wrap:wrap;

}

/* BUTTON */

.btn{

    background:
    linear-gradient(
        135deg,
        #8B0000,
        #111
    );

    color:white;

    padding:14px 25px;

    border-radius:15px;

    text-decoration:none;

    transition:0.3s;

    font-size:14px;

    font-weight:500;

}

.btn:hover{

    transform:translateY(-4px);

}

/* BUTTON DASHBOARD */

.dashboard-btn{

    background:#444;

    color:white;

    padding:14px 25px;

    border-radius:15px;

    text-decoration:none;

    transition:0.3s;

    font-size:14px;

    font-weight:500;

}

.dashboard-btn:hover{

    background:#222;

    transform:translateY(-4px);

}

/* TABLE */

.table-box{

    background:white;

    border-radius:25px;

    overflow:auto;

    box-shadow:0 10px 30px rgba(0,0,0,0.08);

}

table{

    width:100%;

    border-collapse:collapse;

}

table th{

    background:#111;

    color:white;

    padding:20px;

    text-align:left;

}

table td{

    padding:20px;

    border-bottom:1px solid #eee;

    vertical-align:middle;

}

/* GAMBAR */

.berita-img{

    width:100px;

    height:70px;

    object-fit:cover;

    border-radius:10px;

}

/* AKSI */

.action{

    display:flex;

    gap:10px;

    flex-wrap:wrap;

}

/* BUTTON EDIT */

.edit-btn{

    background:orange;

    color:white;

    padding:10px 18px;

    border-radius:10px;

    text-decoration:none;

    font-size:14px;

    transition:0.3s;

}

.edit-btn:hover{

    opacity:0.9;

}

/* BUTTON DELETE */

.delete-btn{

    background:#8B0000;

    color:white;

    padding:10px 18px;

    border:none;

    border-radius:10px;

    cursor:pointer;

    font-size:14px;

    transition:0.3s;

}

.delete-btn:hover{

    opacity:0.9;

}

/* FOOTER */

.footer{

    margin-top:30px;

    text-align:center;

    color:#777;

}

/* RESPONSIVE */

@media(max-width:768px){

    body{
        padding:20px;
    }

    table{
        font-size:12px;
    }

    .action{
        flex-direction:column;
    }

}

</style>

</head>

<body>

<div class="header">

    <h1>Kelola Berita</h1>

    <div class="button-group">

        <a href="{{ url('/dashboard') }}"
           class="dashboard-btn">

            ← Dashboard

        </a>

        <a href="{{ url('/admin/berita/create') }}"
           class="btn">

            + Tambah Berita

        </a>

    </div>

</div>

<div class="table-box">

<table>

<tr>

    <th>No</th>

    <th>Foto</th>

    <th>Judul</th>

    <th>Isi</th>

    <th>Aksi</th>

</tr>

@foreach($berita as $item)

<tr>

    <td>{{ $loop->iteration }}</td>

    <td>

        @if($item->gambar)

            <img
                src="{{ asset('uploads/'.$item->gambar) }}"
                class="berita-img">

        @else

            Tidak ada gambar

        @endif

    </td>

    <td>{{ $item->judul }}</td>

    <td>

        {{ \Illuminate\Support\Str::limit($item->isi, 80) }}

    </td>

    <td>

        <div class="action">

            <a href="{{ url('/admin/berita/edit/'.$item->id) }}"
               class="edit-btn">

                Edit

            </a>

            <button
                class="delete-btn"
                onclick="hapusBerita({{ $item->id }})">

                Hapus

            </button>

        </div>

    </td>

</tr>

@endforeach

</table>

</div>

<div class="footer">

    © 2026 Kelurahan Padangiring

</div>

<script>

function hapusBerita(id){

    let konfirmasi = confirm(
        "Yakin ingin menghapus berita ini?"
    );

    if(konfirmasi){

        window.location.href =
        "/admin/berita/delete/" + id;

    }

}

</script>

</body>
</html>