<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Edit Surat</title>

<style>

body{
    font-family:Poppins;
    background:#f5f5f5;
    padding:50px;
}

.box{

    background:white;

    max-width:500px;

    margin:auto;

    padding:40px;

    border-radius:20px;

}

select,
button{

    width:100%;

    padding:15px;

    margin-top:20px;

}

button{

    background:#8B0000;

    color:white;

    border:none;

}

</style>

</head>

<body>

<div class="box">

<h1>Edit Status Surat</h1>

<form method="POST"
      action="{{ url('/admin/surat/update/'.$surat->id) }}">

    @csrf

    <select name="status">

        <option value="Menunggu">

            Menunggu

        </option>

        <option value="Diproses">

            Diproses

        </option>

        <option value="Selesai">

            Selesai

        </option>

    </select>

    <button type="submit">

        Update Status

    </button>

</form>

</div>

</body>
</html>