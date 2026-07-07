<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tracking Surat</title>

<style>

body{
    font-family:Poppins;
    background:#f5f5f5;
    padding:40px;
}

.box{
    background:white;
    padding:30px;
    border-radius:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    
}

table{
    table-layout:fixed;
}

th, td{
    word-wrap:break-word;
    overflow-wrap:break-word;
    word-break:break-word;
    vertical-align:top;
}

.col-kode{
    width:120px;
}

.col-nama{
    width:180px;
}

.col-jenis{
    width:180px;
}

.col-keperluan{
    width:400px;
}

.col-status{
    width:100px;
}

.col-aksi{
    width:220px;
}

th{
    background:#8B0000;
    color:white;
    padding:15px;
    text-align:center;
    vertical-align:middle;
}

td{
    padding:15px;
    border-bottom:1px solid #ddd;
    text-align:center;
    vertical-align:middle;
}

td:last-child{
    white-space:nowrap;
}

.btn{
    background:#111;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:8px;
    display:inline-block;
}

.btn-delete{
    background:red;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:8px;
    display:inline-block;
    margin-left:8px;
}

.back{
    display:inline-block;
    margin-bottom:20px;
    padding:10px 20px;
    background:#8B0000;
    color:white;
    text-decoration:none;
    border-radius:10px;
}

</style>
</head>
<body>

<h1>Halaman Tracking Surat</h1>

<a href="{{ url('/dashboard') }}" class="back">
    ← Kembali Dashboard
</a>

<div class="box">

    <h1>Tracking Surat Masyarakat</h1>

    <!-- FORM PENCARIAN -->
    <div style="
        display:flex;
        justify-content:flex-end;
        margin-bottom:20px;
    ">

        <form action="{{ url('/admin/tracking') }}" method="GET">

            <input
                type="text"
                name="keyword"
                value="{{ request('keyword') }}"
                placeholder="Cari Kode Tracking / Jenis Surat..."
                style="
                    width:320px;
                    padding:12px 18px;
                    border-radius:30px;
                    border:1px solid #ccc;
                    outline:none;
                    font-size:15px;
                ">

            <button
                type="submit"
                style="
                    background:#8B0000;
                    color:white;
                    border:none;
                    padding:12px 20px;
                    border-radius:30px;
                    cursor:pointer;
                    margin-left:8px;
                ">
                🔍 Cari
            </button>

            <a href="{{ url('/admin/tracking') }}"
               style="
                    background:#666;
                    color:white;
                    padding:12px 18px;
                    border-radius:30px;
                    text-decoration:none;
                    margin-left:8px;
               ">
                Reset
            </a>

        </form>

    </div>

    <table>

<tr>
    <th class="col-kode">Kode Tracking</th>
    <th class="col-nama">Nama</th>
    <th class="col-jenis">Jenis Surat</th>
    <th class="col-keperluan">Keperluan</th>
    <th class="col-status">Status</th>
    <th class="col-aksi">Aksi</th>
</tr>

@foreach($surats as $surat)

<tr>

    <td>{{ $surat->kode_tracking }}</td>

    <td>{{ $surat->nama }}</td>

    <td>{{ $surat->jenis_surat }}</td>

    <td>{{ $surat->keperluan }}</td>

    <td>{{ $surat->status }}</td>

    <td>

        <a href="{{ url('/admin/surat/progress/'.$surat->id) }}"
           class="btn">
            Update Progress
        </a>

        <a href="{{ url('/admin/surat/cetak/'.$surat->id) }}"
            class="btn"
            target="_blank">
            Cetak PDF
        </a>

        <a href="{{ url('/admin/tracking/delete/'.$surat->id) }}"
           class="btn-delete"
           onclick="return confirm('Apakah Anda ingin menghapus surat ini?')">
            Hapus
        </a>

    </td>

</tr>

@endforeach

</table>

</div>

</body>
</html>