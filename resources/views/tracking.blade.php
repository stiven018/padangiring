<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Tracking Surat</title>

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
        rgba(0,0,0,0.7),
        rgba(0,0,0,0.7)
    ),
    url('/images/tracking.jpg');

    background-size:cover;

    background-position:center;

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:20px;

}

/* BOX */

.box{

    width:100%;

    max-width:700px;

    background:rgba(255,255,255,0.12);

    backdrop-filter:blur(15px);

    border-radius:35px;

    padding:50px;

    color:white;

    box-shadow:0 10px 40px rgba(0,0,0,0.3);

}

/* TITLE */

.title{

    text-align:center;

    margin-bottom:40px;

}

.title h1{

    color:#FFD700;

    font-size:45px;

    margin-bottom:10px;

}

/* FORM */

input{

    width:100%;

    padding:18px;

    border:none;

    border-radius:15px;

    margin-top:15px;

    margin-bottom:25px;

    font-size:16px;

}

button{

    width:100%;

    padding:18px;

    border:none;

    border-radius:15px;

    background:
    linear-gradient(
        135deg,
        #8B0000,
        #111
    );

    color:white;

    font-size:18px;

    cursor:pointer;

}

/* RESULT */

.result{

    margin-top:40px;

    background:rgba(255,255,255,0.12);

    padding:30px;

    border-radius:20px;

}

.result h2{

    color:#FFD700;

    margin-bottom:20px;

}

.result p{

    margin-bottom:15px;

    font-size:17px;

}

/* PROGRESS BAR */

.progress{

    width:100%;

    height:35px;

    background:#ddd;

    border-radius:50px;

    overflow:hidden;

    margin-top:20px;

}

.progress-bar{

    height:100%;

    background:
    linear-gradient(
        135deg,
        #FFD700,
        #8B0000
    );

    color:white;

    display:flex;

    justify-content:center;

    align-items:center;

    font-weight:bold;

    transition:1s;

}
.timeline{

    margin-top:30px;

}

.timeline-item{

    position:relative;

    padding-left:40px;

    margin-bottom:25px;

}

.timeline-item::before{

    content:'';

    position:absolute;

    left:10px;

    top:0;

    width:15px;

    height:15px;

    border-radius:50%;

    background:#FFD700;

}

.timeline-item::after{

    content:'';

    position:absolute;

    left:16px;

    top:15px;

    width:3px;

    height:40px;

    background:#FFD700;

}

.timeline-item:last-child::after{

    display:none;

}

</style>

</head>

<body>

<div class="box">

    <div class="title">

        <h1>Tracking Surat</h1>

        <p>
            Cek status surat masyarakat
        </p>

    </div>

    <!-- FORM -->

    @if(!isset($surat))
    @if(session('error'))

        <div style="
        background:#ffebee;
        border:1px solid #ef5350;
        color:#c62828;
        padding:15px;
        border-radius:12px;
        margin-bottom:20px;
        text-align:center;
        font-weight:bold;
        font-size:16px;
        ">

        ❌ {{ session('error') }}

        </div>

        @endif

<form method="POST"
      action="{{ url('/tracking') }}">

    @csrf

    <input
        type="text"
        name="kode_tracking"
        placeholder="Masukkan kode surat..."
        required
    >

    <button type="submit">

        CEK STATUS SURAT

    </button>

</form>

@endif

    <!-- RESULT -->

    @if(isset($surat))

    <div class="result">

    <h2>Status Surat</h2>

    <p>
        <strong>Kode Tracking:</strong>
        {{ $surat->kode_tracking }}
    </p>

    <p>
        <strong>Nama:</strong>
        {{ $surat->nama }}
    </p>

    <p>
        <strong>Jenis Surat:</strong>
        {{ $surat->jenis_surat }}
    </p>

    <p>
        <strong>Status:</strong>
        {{ $surat->status }}
    </p>

    @php

        $progress = 0;

        if($surat->status == 'Menunggu'){
            $progress = 20;
        }

        elseif($surat->status == 'Diproses'){
            $progress = 60;
        }

        elseif($surat->status == 'Selesai'){
            $progress = 100;
        }

    @endphp

    <!-- PROGRESS TEXT -->

    <p>

        <strong>Progress:</strong>

        {{ $progress }}%

    </p>

    <!-- PROGRESS BAR -->

    <div class="progress">

        <div class="progress-bar"
             style="width: {{ $progress }}%">

            {{ $progress }}%

        </div>

    </div>

    <h3 style="margin-top:30px;color:#FFD700;">
Riwayat Tracking
</h3>

<div class="timeline">

@foreach($surat->histories as $history)

<div class="timeline-item">

    <strong>
        {{ $history->status }}
    </strong>

    <br>

    {{ $history->keterangan }}

    <br>

    <small>

        {{ $history->created_at
            ->format('d-m-Y H:i') }}

    </small>

</div>

@endforeach

</div>

</div>

    @endif

</div>

</body>
</html>