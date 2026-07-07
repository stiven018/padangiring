<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Update Progress</title>

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

    background:#111;

    color:white;

    border:none;

}

</style>

</head>

<body>

<div class="box">

<h1>Update Progress Surat</h1>

<form method="POST"
      action="{{ url('/admin/surat/progress-update/'.$surat->id) }}">

    @csrf

    <select name="status">

        <option value="Menunggu">

            Menunggu - 20%

        </option>

        <option value="Diproses">

            Diproses - 60%

        </option>

        <option value="Selesai">

            Selesai - 100%

        </option>

    </select>

    <button type="submit">

        Update Progress

    </button>

</form>

</div>

</body>
</html>