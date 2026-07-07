<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Admin Padangiring</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* NAVBAR */

.navbar{

    position:fixed;

    top:0;
    left:0;

    width:100%;

    display:flex;

    align-items:center;

    padding:20px 60px;

    background:rgba(0,0,0,0.35);

    backdrop-filter:blur(10px);

    z-index:1000;

}

.navbar-logo{

    color:#FFD700;

    font-size:28px;

    font-weight:700;

    letter-spacing:2px;

}

.navbar ul{

    display:flex;

    list-style:none;

    margin-left:auto;

}

.navbar ul li{

    margin-left:30px;

}

.navbar ul li a{

    color:white;

    text-decoration:none;

    font-weight:500;

}

.navbar ul li a:hover{

    color:#FFD700;

}
        body{

            height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

            overflow:hidden;

            background:
            linear-gradient(
                rgba(0,0,0,0.65),
                rgba(0,0,0,0.65)
            ),
            url('/images/login-toraja.jpg');

            background-size:cover;

            background-position:center;

        }

        /* MOTIF */

        .motif{

            position:absolute;

            top:0;

            left:0;

            width:100%;

            height:8px;

            background:
            repeating-linear-gradient(
                45deg,
                #8B0000,
                #8B0000 10px,
                #FFD700 10px,
                #FFD700 20px,
                #111 20px,
                #111 30px
            );

        }

        /* LOGIN BOX */

        .login-box{

            width:400px;

            background:rgba(255,255,255,0.12);

            backdrop-filter:blur(15px);

            border:1px solid rgba(255,255,255,0.2);

            padding:50px;

            border-radius:30px;

            box-shadow:0 10px 40px rgba(0,0,0,0.3);

            text-align:center;

            color:white;

            animation:fadeIn 1s ease;

        }

        .logo{

            font-size:38px;

            font-weight:700;

            color:#FFD700;

            margin-bottom:10px;

            letter-spacing:2px;

        }

        .subtitle{

            margin-bottom:35px;

            color:#ddd;

            font-size:15px;

        }

        /* INPUT */

        .input-box{

            margin-bottom:25px;

            text-align:left;

        }

        .input-box label{

            display:block;

            margin-bottom:10px;

            font-weight:500;

        }

        .input-box input{

            width:100%;

            padding:15px;

            border:none;

            border-radius:15px;

            background:rgba(255,255,255,0.15);

            color:white;

            outline:none;

            font-size:15px;

        }

        .input-box input::placeholder{
            color:#ddd;
        }

        /* BUTTON */

        .btn{

            width:100%;

            padding:16px;

            border:none;

            border-radius:50px;

            background:
            linear-gradient(
                135deg,
                #8B0000,
                #111
            );

            color:white;

            font-size:16px;

            font-weight:600;

            cursor:pointer;

            transition:0.4s;

        }

        .btn:hover{

            transform:translateY(-5px);

        }

        /* EXTRA */

        .extra{

            margin-top:25px;

            font-size:14px;

            color:#ddd;

        }

        .extra a{

            color:#FFD700;

            text-decoration:none;

        }

        .extra a:hover{
            text-decoration:underline;
        }

        /* ANIMATION */

        @keyframes fadeIn{

            from{

                opacity:0;

                transform:translateY(40px);

            }

            to{

                opacity:1;

                transform:translateY(0);

            }

        }

        /* RESPONSIVE */

        @media(max-width:480px){

            .login-box{

                width:90%;

                padding:35px;

            }

            .logo{

                font-size:30px;

            }

        }

    </style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="navbar-logo">
        PADANGIRING
    </div>

    <ul>

            <li><a href="{{ url('/home') }}">Beranda</a></li>

            <li><a href="{{ url('/profil') }}">Profil</a></li>

            <li><a href="{{ url('/layanan') }}">Layanan</a></li>

            <li><a href="{{ url('/berita') }}">Berita</a></li>

            <li><a href="{{ url('/galeri') }}">Galeri</a></li>

            <li><a href="{{ url('/kontak') }}">Kontak</a></li>

            <li><a href="{{ url('/login') }}">Login</a></li>

    </ul>

</div>

    <!-- MOTIF -->

    <div class="motif"></div>

    <!-- LOGIN BOX -->

    <div class="login-box">

        <div class="logo">

            PADANGIRING

        </div>
        

        <div class="subtitle">

            Login Admin Kelurahan Padangiring

        </div>

       <form action="{{ url('/login') }}" method="POST">

    @csrf

            <!-- EMAIL -->

            <div class="input-box">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required
                >

            </div>

            <!-- PASSWORD -->

            <div class="input-box">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>

            <!-- BUTTON -->

            <button type="submit" class="btn">

                LOGIN ADMIN

            </button>

            @if(session('error'))

            <div style="
            background:#ffdddd;
            color:#8B0000;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
            font-weight:600;
            ">

            {{ session('error') }}

            </div>

            @endif

        </form>

        <div class="extra">

            © 2026 Kelurahan Padangiring

        </div>

    </div>

</body>
</html>