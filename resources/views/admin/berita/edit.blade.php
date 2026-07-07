<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Edit Berita</title>

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

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px;

}

/* CARD */

.card{

    width:100%;

    max-width:850px;

    background:white;

    border-radius:30px;

    overflow:hidden;

    box-shadow:0 10px 40px rgba(0,0,0,0.08);

}

/* HEADER */

.card-header{

    background:
    linear-gradient(
        135deg,
        #8B0000,
        #111
    );

    padding:35px;

    color:white;

}

.card-header h1{

    font-size:35px;

    color:#FFD700;

    margin-bottom:10px;

}

.card-header p{

    opacity:0.9;

}

/* BODY */

.card-body{

    padding:40px;

}

/* FORM */

.form-group{

    margin-bottom:25px;

}

label{

    display:block;

    margin-bottom:10px;

    font-weight:600;

    color:#333;

}

input[type="text"],
textarea,
input[type="file"]{

    width:100%;

    padding:15px;

    border:1px solid #ddd;

    border-radius:15px;

    outline:none;

    transition:0.3s;

    font-size:15px;

}

input[type="text"]:focus,
textarea:focus{

    border-color:#8B0000;

}

textarea{

    min-height:200px;

    resize:vertical;

}

/* GAMBAR */

.preview{

    margin-top:15px;

}

.preview img{

    width:220px;

    border-radius:15px;

    object-fit:cover;

    box-shadow:0 5px 15px rgba(0,0,0,0.1);

}

/* BUTTON */

.button-group{

    display:flex;

    gap:15px;

    margin-top:30px;

}

.save-btn{

    background:
    linear-gradient(
        135deg,
        #8B0000,
        #111
    );

    color:white;

    border:none;

    padding:15px 30px;

    border-radius:15px;

    cursor:pointer;

    font-size:15px;

    transition:0.3s;

}

.save-btn:hover{

    transform:translateY(-3px);

}

.back-btn{

    background:#ddd;

    color:#111;

    text-decoration:none;

    padding:15px 30px;

    border-radius:15px;

    transition:0.3s;

}

.back-btn:hover{

    background:#ccc;

}

/* RESPONSIVE */

@media(max-width:768px){

    .card-body{
        padding:25px;
    }

    .button-group{
        flex-direction:column;
    }

}

</style>

</head>

<body>

<div class="card">

    <div class="card-header">

        <h1>Edit Berita</h1>

        <p>
            Perbarui informasi berita Kelurahan Padangiring
        </p>

    </div>

    <div class="card-body">

        <form
            action="{{ url('/admin/berita/update/'.$berita->id) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <!-- JUDUL -->

            <div class="form-group">

                <label>Judul Berita</label>

                <input
                    type="text"
                    name="judul"
                    value="{{ $berita->judul }}"
                    required>

            </div>

            <!-- ISI -->

            <div class="form-group">

                <label>Isi Berita</label>

                <textarea
                    name="isi"
                    required>{{ $berita->isi }}</textarea>

            </div>

            <!-- GAMBAR -->

            <div class="form-group">

                <label>Ganti Foto Berita</label>

                <input
                    type="file"
                    name="gambar">

                <div class="preview">

                    @if($berita->gambar)

                    <img
                        src="{{ asset('storage/'.$berita->gambar) }}">

                    @endif

                </div>

            </div>

            <!-- BUTTON -->

            <div class="button-group">

                <button
                    type="submit"
                    class="save-btn">

                    Simpan Perubahan

                </button>

                <a href="{{ url('/admin/berita') }}"
                   class="back-btn">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>