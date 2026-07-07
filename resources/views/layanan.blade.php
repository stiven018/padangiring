<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan Digital Padangiring</title>

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
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{
            position:fixed;
            top:0;
            width:100%;
            z-index:1000;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:20px 60px;

            background:rgba(0,0,0,0.45);
            backdrop-filter:blur(10px);
        }

        .logo{
            color:#FFD700;
            font-size:28px;
            font-weight:700;
            letter-spacing:2px;
        }

        .navbar ul{
            display:flex;
            list-style:none;
        }

        .navbar ul li{
            margin-left:30px;
        }

        .navbar ul li a{
            color:white;
            text-decoration:none;
            font-weight:500;
            transition:0.3s;
        }

        .navbar ul li a:hover{
            color:#FFD700;
        }

        /* HERO */

        .hero{
            height:60vh;

            background:
            linear-gradient(rgba(0,0,0,0.65),
            rgba(0,0,0,0.65)),
            url('/images/profil kantor lurah.jpeg');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;

            text-align:center;
            padding:20px;
        }

        .hero-content{
            color:white;
            max-width:800px;
        }

        .hero-content h1{
            font-size:60px;
            color:#FFD700;
            margin-bottom:20px;
        }

        .hero-content p{
            font-size:22px;
            line-height:1.8;
        }

        /* MOTIF */

        .motif{
            height:10px;

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

        /* CONTAINER */

        .container{
            width:90%;
            max-width:1200px;
            margin:auto;
            padding:80px 0;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:42px;
            color:#8B0000;
            margin-bottom:10px;
        }

        .section-title p{
            color:#666;
        }

        /* FORM BOX */

        .form-box{
            background:white;
            padding:50px;
            border-radius:30px;

            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            margin-bottom:60px;
        }

        /* INPUT */

        input,
        select,
        textarea{

            width:100%;

            padding:15px;

            margin-top:10px;
            margin-bottom:25px;

            border:none;

            background:#f5f5f5;

            border-radius:15px;

            font-size:15px;

            outline:none;
        }

        textarea{
            min-height:140px;
            resize:none;
        }

        /* BUTTON */

        .btn{
            background:linear-gradient(135deg,#8B0000,#111);

            color:white;

            border:none;

            padding:16px 35px;

            border-radius:50px;

            cursor:pointer;

            font-weight:600;

            transition:0.4s;
        }

        .btn:hover{
            transform:translateY(-5px);
        }

        /* SUCCESS */

        .success{
            background:#e6ffee;
            color:#006600;

            padding:20px;

            border-radius:15px;

            margin-bottom:30px;
        }

        /* TRACKING */

        .tracking-box{
            background:white;
            padding:50px;
            border-radius:30px;

            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .status{
            display:inline-block;

            margin-top:15px;

            padding:12px 25px;

            border-radius:50px;

            background:linear-gradient(135deg,#8B0000,#111);

            color:white;
        }

        /* CARD INFO */

        .info-cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;

            margin-top:70px;
        }

        .info-card{
            background:white;

            border-radius:25px;

            padding:35px;

            text-align:center;

            box-shadow:0 10px 30px rgba(0,0,0,0.08);

            transition:0.4s;
        }

        .info-card:hover{
            transform:translateY(-10px);
        }

        .info-card h3{
            color:#8B0000;
            margin-bottom:15px;
        }

        .info-card p{
            color:#666;
            line-height:1.8;
        }

        /* FOOTER */

        .footer{
            background:#111;
            color:white;

            text-align:center;

            padding:60px 20px;

            margin-top:80px;
        }

        .footer h3{
            color:#FFD700;
            margin-bottom:15px;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .navbar{
                flex-direction:column;
                padding:20px;
            }

            .navbar ul{
                margin-top:15px;
                flex-wrap:wrap;
                justify-content:center;
            }

            .navbar ul li{
                margin:10px;
            }

            .hero-content h1{
                font-size:40px;
            }

            .hero-content p{
                font-size:18px;
            }

            .form-box,
            .tracking-box{
                padding:30px;
            }

        }

    </style>

</head>
<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <div class="logo">
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

    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <h1>PELAYANAN DIGITAL PADANGIRING</h1>

            <p>
                Sistem pelayanan masyarakat modern berbasis digital 
                yang cepat, transparan, dan mudah diakses.
            </p>

        </div>

    </section>

    <div class="motif"></div>

    <!-- CONTAINER -->

    <section class="container">

        <div class="section-title">

            <h2>Pengajuan Surat Online</h2>

            <p>
                Ajukan kebutuhan administrasi secara digital
            </p>

        </div>

        <!-- FORM -->

        <div class="form-box">

            @if(session('success'))

                <div class="success">

                    Pengajuan berhasil.

                    <br><br>

                    Kode Tracking Anda:

                    <strong>
                        {{ session('success') }}
                    </strong>

                </div>

            @endif

            <form method="POST">

                @csrf

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama Lengkap"
                    required
                >

                <input
                    type="text"
                    name="nik"
                    placeholder="NIK"
                    required
                >

                <input
                type="text"
                name="tempat_lahir"
                placeholder="Tempat Lahir"
                required

                >

                <input
                type="date"
                name="tanggal_lahir"
                required

                >

                <select name="jenis_kelamin" required>

                <option value="">
                    Pilih Jenis Kelamin
                </option>

                <option value="Laki-laki">
                    Laki-laki
                </option>

                <option value="Perempuan">
                    Perempuan
                </option>
                

                </select>

                <input
                type="text"
                name="agama"
                placeholder="Agama"
                required

                >

                <input
                type="text"
                name="pekerjaan"
                placeholder="Pekerjaan"
                required

                >

                <textarea
                    name="alamat"
                    placeholder="Alamat Lengkap"
                    required
                ></textarea>


                <select id="jenis_surat" name="jenis_surat" required>

                    <option value="">-- Pilih Jenis Surat --</option>

                    <option value="Surat Keterangan Usaha">
                        Surat Keterangan Usaha
                    </option>

                    <option value="Surat Domisili">
                        Surat Domisili
                    </option>

                    <option value="Surat Belum Menikah">
                        Surat Belum Menikah
                    </option>

                    <option value="Surat Tidak Mampu">
                        Surat Tidak Mampu
                    </option>

                    <option value="Surat Kematian">
                        Surat Kematian
                    </option>

                    <option value="Surat Ahli Waris">
                        Surat Ahli Waris
                    </option>

                    <option value="Surat Izin Keramaian">
                        Surat Izin Keramaian
                    </option>

                    <option value="Surat Izin Perjalanan">
                        Surat Izin Perjalanan
                    </option>

                    <option value="Surat Penghasilan Orang Tua">
                        Surat Penghasilan Orang Tua
                    </option>

                    <option value="Surat Kelakuan Baik">
                        Surat Kelakuan Baik
                    </option>

                </select>

                <div id="formTambahan"></div>

                <textarea
                    name="keperluan"
                    placeholder="Keperluan"
                    required
                ></textarea>

                <button type="submit" class="btn">

                    Kirim Pengajuan

                </button>

            </form>

        </div>

        <!-- TRACKING -->

        <div class="section-title">

            <h2>Tracking Surat</h2>

            <p>
                Pantau status surat secara realtime
            </p>

        </div>

        <div class="tracking-box">

            <form action="{{ url('/tracking') }}" method="POST">

                @csrf

                <input
                    type="text"
                    name="kode_tracking"
                    placeholder="Masukkan kode tracking"
                    required
                >

                <button type="submit" class="btn">

                    Cek Status

                </button>

            </form>

            @isset($surat)

                <hr style="margin:30px 0;">

                <h3>Data Surat</h3>

                <br>

                <p>
                    Nama:
                    {{ $surat->nama }}
                </p>

                <br>

                <p>
                    Jenis Surat:
                    {{ $surat->jenis_surat }}
                </p>

                <br>

                <p>Status Surat:</p>

                <div class="status">

                    {{ $surat->status }}

                </div>

            @endisset

        </div>

        <!-- INFO -->

        <div class="info-cards">

            <div class="info-card">

                <h3>Pelayanan Cepat</h3>

                <p>
                    Pengajuan surat lebih cepat dan efisien.
                </p>

            </div>

            <div class="info-card">

                <h3>Digital Modern</h3>

                <p>
                    Sistem pelayanan online berbasis teknologi.
                </p>

            </div>

            <div class="info-card">

                <h3>Tracking</h3>

                <p>
                    Pelayanan bisa di pantau menggunakan kode tracking.
                </p>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <div class="footer">

        <h3>Kelurahan Padangiring</h3>

        <p>
            Website Pelayanan Berbasis Digital.
        </p>

        <br>

        <p>
            © 2026 Kelurahan Padangiring
        </p>

    </div>

    <script>

const jenisSurat = document.getElementById('jenis_surat');
const formTambahan = document.getElementById('formTambahan');

jenisSurat.addEventListener('change', function () {

    let html = '';

    if (this.value === 'Surat Keterangan Usaha') {

    html = `

        <input
        type="text"
        name="jenis_usaha"
        placeholder="Jenis Usaha">

        <textarea
        name="alamat_usaha"
        placeholder="Alamat Usaha"></textarea>

    `;

}

    else if (this.value === 'Surat Domisili') {

        html = `
            <input type="text"
                   name="alamat_domisili"
                   placeholder="Alamat Domisili">
        `;

    }

    else if (this.value === 'Surat Tidak Mampu') {

        html = `
            <input type="number"
                   name="penghasilan"
                   placeholder="Penghasilan Per Bulan">
        `;

    }

    else if (this.value === 'Surat Kematian') {

        html = `

            <h3>Data Orang Yang Meninggal</h3>

            <input
            type="text"
            name="nama_meninggal"
            placeholder="Nama Orang Yang Meninggal">

            <select name="jk_meninggal">
            <option value="">Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>

            <input
            type="text"
            name="tempat_lahir_meninggal"
            placeholder="Tempat Lahir">

            <input
            type="date"
            name="tanggal_lahir_meninggal">

            <textarea
            name="alamat_meninggal"
            placeholder="Alamat Orang Yang Meninggal"></textarea>

            <hr>

            <h3>Data Kematian</h3>

            <input
            type="date"
            name="tanggal_kematian">

            <input
            type="text"
            name="penyebab_kematian"
            placeholder="Penyebab Kematian">

            <input
            type="text"
            name="tempat_kematian"
            placeholder="Tempat Kematian">

            <hr>

            <h3>Data Pelapor</h3>

            <input
            type="text"
            name="nama_pelapor"
            placeholder="Nama Pelapor">

            <select name="jk_pelapor">
            <option>Laki-laki</option>
            <option>Perempuan</option>
            </select>

            <input
            type="text"
            name="ttl_pelapor"
            placeholder="Tempat/Tanggal Lahir atau Umur">

            <input
            type="text"
            name="alamat_pelapor"
            placeholder="Alamat Pelapor">

            <input
            type="text"
            name="hubungan_keluarga"
            placeholder="Hubungan Keluarga">

            `;
            }

             else if (this.value === 'Surat Ahli Waris') {

                html = `

                <h3>Data Pewaris</h3>

                <select name="status_pewaris">

                <option value="Alm.">Alm.</option>

                <option value="Almh.">Almh.</option>

                </select>

                <input
                type="text"
                name="nama_pewaris"
                placeholder="Nama Pewaris">

                <hr>

                <h3>Data Ahli Waris</h3>

                <div id="listAhliWaris">

                <div class="item-ahli">

                <input
                type="text"
                name="ahli_nama[]"
                placeholder="Nama Lengkap">

                <input
                type="text"
                name="ahli_nik[]"
                placeholder="NIK">

                <input
                type="date"
                name="ahli_tanggal_lahir[]">

                <input
                type="text"
                name="ahli_hubungan[]"
                placeholder="Hubungan Keluarga">

                </div>

                </div>

                <br>

                <button
                type="button"
                class="btn"
                onclick="tambahAhliWaris()">

                + Tambah Ahli Waris

                </button>

                <hr>

                <h3>Data Saksi</h3>

                <input
                type="text"
                name="saksi1"
                placeholder="Nama Saksi I">

                <input
                type="text"
                name="saksi2"
                placeholder="Nama Saksi II">

                `;

                }

        else if (this.value === 'Surat Izin Keramaian') {

            html = `

            <h3>Data Permohonan Izin Keramaian</h3>

            <input
            type="text"
            name="no_hp"
            placeholder="Nomor HP">

            <input
            type="text"
            name="jenis_upacara"
            placeholder="Jenis Upacara">

            <input
            type="text"
            name="hari_pelaksanaan"
            placeholder="Hari Pelaksanaan">

            <input
            type="date"
            name="tanggal_pelaksanaan">

            <textarea
            name="tempat_pelaksanaan"
            placeholder="Tempat Pelaksanaan"></textarea>

            <input
            type="text"
            name="agama_upacara"
            placeholder="Agama / Upacara Adat">

            `;

            }

            else if (this.value === 'Surat Izin Perjalanan') {

                html = `

                <h3>Data Surat Izin Perjalanan</h3>

                <input
                type="text"
                name="tujuan_perjalanan"
                placeholder="tujuan"
                required>

                `;

            }

     else if (this.value === 'Surat Penghasilan Orang Tua') {

            html = `

            <h3>Data Orang Tua</h3>

            <input
            type="text"
            name="nama_orangtua"
            placeholder="Nama Orang Tua">

            <input
            type="text"
            name="tempat_lahir_orangtua"
            placeholder="Tempat Lahir Orang Tua">

            <input
            type="date"
            name="tanggal_lahir_orangtua">

            <select name="jenis_kelamin_orangtua">

            <option value="">Jenis Kelamin Orang Tua</option>

            <option value="Laki-laki">Laki-laki</option>

            <option value="Perempuan">Perempuan</option>

            </select>

            <input
            type="text"
            name="pekerjaan_orangtua"
            placeholder="Pekerjaan Orang Tua">

            <textarea
            name="alamat_orangtua"
            placeholder="Alamat Orang Tua"></textarea>

            <input
            type="text"
            name="no_hp_orangtua"
            placeholder="Nomor HP Orang Tua">

            <input
            type="text"
            name="penghasilan_bulanan"
            placeholder="Penghasilan / Bulan">

            <input
            type="number"
            name="jumlah_tanggungan"
            placeholder="Jumlah Tanggungan">

            <hr>

            <h3>Data Anak</h3>

            <input
            type="text"
            name="nama_anak"
            placeholder="Nama Anak">

            <input
            type="text"
            name="tempat_lahir_anak"
            placeholder="Tempat Lahir Anak">

            <input
            type="date"
            name="tanggal_lahir_anak">

            <select name="jenis_kelamin_anak">

            <option value="">Jenis Kelamin Anak</option>

            <option value="Laki-laki">Laki-laki</option>

            <option value="Perempuan">Perempuan</option>

            </select>

            <input
            type="text"
            name="universitas"
            placeholder="Nama Universitas">

            <input
            type="text"
            name="fakultas_jurusan"
            placeholder="Fakultas / Jurusan">

            <input
            type="text"
            name="nim"
            placeholder="NIM">

            <textarea
            name="alamat_anak"
            placeholder="Alamat Anak"></textarea>

            `;

            }

    else if (this.value === 'Surat Kelakuan Baik') {

    html = `

    <h3>Data Surat Kelakuan Baik</h3>

    <textarea
        name="keperluan_kelakuan"
        placeholder="Keperluan Surat (Contoh: Melamar pekerjaan, Persyaratan CPNS, dll)"
        rows="3"></textarea>

    `;

}

    else if (this.value === 'Surat Belum Menikah') {

        html = `
            <input type="text"
                   name="status_perkawinan"
                   placeholder="Status Perkawinan">
        `;

    }

    formTambahan.innerHTML = html;

});
        function tambahAhliWaris(){

        let html = `

        <div class="item-ahli">

        <hr>

        <input
        type="text"
        name="ahli_nama[]"
        placeholder="Nama Lengkap">

        <input
        type="text"
        name="ahli_nik[]"
        placeholder="NIK">

        <input
        type="date"
        name="ahli_tanggal_lahir[]">

        <input
        type="text"
        name="ahli_hubungan[]"
        placeholder="Hubungan Keluarga">

        </div>

        `;

        document
        .getElementById("listAhliWaris")
        .insertAdjacentHTML("beforeend",html);

        }

        
</script>

</body>
</html>