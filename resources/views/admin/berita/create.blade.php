<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Tambah Berita</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{

    background:
    linear-gradient(
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.6)
    ),
    url('/images/toraja-bg.jpg');

    background-size:cover;

    background-position:center;

    min-height:100vh;

    padding:50px;

}

/* CONTAINER */

.container{

    max-width:850px;

    margin:auto;

}

/* CARD */

.card{

    background:white;

    border-radius:30px;

    overflow:hidden;

    box-shadow:0 10px 40px rgba(0,0,0,0.2);

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

    color:#FFD700;

    font-size:34px;

    margin-bottom:10px;

}

.card-header p{

    color:#ddd;

}

/* BODY */

.card-body{

    padding:40px;

}

/* FORM */

.form-group{

    margin-bottom:30px;

}

.form-group label{

    display:block;

    margin-bottom:12px;

    font-weight:600;

    color:#333;

}

.form-control{

    width:100%;

    padding:16px;

    border:1px solid #ddd;

    border-radius:15px;

    font-size:15px;

    outline:none;

    transition:0.3s;

}

.form-control:focus{

    border-color:#8B0000;

    box-shadow:0 0 10px rgba(139,0,0,0.2);

}

/* TEXTAREA */

textarea{

    min-height:220px;

    resize:none;

}

/* FILE */

.file-box{

    border:2px dashed #ccc;

    padding:30px;

    border-radius:20px;

    text-align:center;

    transition:0.3s;

}

.file-box:hover{

    border-color:#8B0000;

}

/* BUTTON */

.button-group{

    display:flex;

    gap:20px;

    margin-top:20px;

}

.btn{

    flex:1;

    padding:16px;

    border:none;

    border-radius:15px;

    font-size:16px;

    font-weight:600;

    cursor:pointer;

    transition:0.3s;

    text-decoration:none;

    text-align:center;

}

/* BUTTON SAVE */

.btn-save{

    background:
    linear-gradient(
        135deg,
        #8B0000,
        #111
    );

    color:white;

}

.btn-save:hover{

    transform:translateY(-5px);

}

/* BUTTON BACK */

.btn-back{

    background:#ddd;

    color:#333;

}

.btn-back:hover{

    background:#bbb;

}

/* RESPONSIVE */

@media(max-width:768px){

    body{
        padding:20px;
    }

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

<div class="container">

    <div class="card">

        <!-- HEADER -->

        <div class="card-header">

            <h1>Tambah Berita</h1>

            <p>
                Kelola informasi dan berita masyarakat
                Kelurahan Padangiring
            </p>

        </div>

        <!-- BODY -->

        <div class="card-body">

            <form
                action="{{ url('/admin/berita/store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <!-- JUDUL -->

                <div class="form-group">

                    <label>Judul Berita</label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        placeholder="Masukkan judul berita..."
                        required>

                </div>

                <!-- ISI -->

                <div class="form-group">

                    <label>Isi Berita</label>

                    <textarea
                        name="isi"
                        class="form-control"
                        placeholder="Tulis isi berita..."
                        required></textarea>

                </div>

                <!-- FOTO -->

                <div class="form-group">

                    <label>Upload Foto Berita</label>

                    <div class="file-box">

                        <input
                            type="file"
                            name="gambar"
                            required>

                    </div>

                </div>

                <!-- BUTTON -->

                <div class="button-group">

                    <button
                        type="submit"
                        class="btn btn-save">

                        Simpan Berita

                    </button>

                    <a href="{{ url('/admin/berita') }}"
                       class="btn btn-back">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>