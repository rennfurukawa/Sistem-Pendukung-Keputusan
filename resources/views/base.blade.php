<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base</title>
    <link rel = "icon" href = "https://cdn.discordapp.com/attachments/764727363253829675/1160549610234839050/5b2694795074b9c153754f3b9a454c4248a11d86_s2_n2_y1-removebg-preview.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        /* Styling footer dengan latar belakang hijau tua (#008170) */
        .footer {
            background-color: #008170;
            color: white; /* Warna teks putih agar terlihat kontras */
            text-align: center;
            padding: 20px; /* Menambahkan ruang padding ke dalam footer */
            height: 60px;
        }

        .judul{
            color:#008170;
            font-weight: 700px;
        }

        .circle {
            background-color: #e8e7e7; /* Warna abu-abu */
            border-radius: 100%;
            padding: 20px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            color: #008170;
        }

        .gambar{
            height: 300px;
            width: 300px;
            position: relative;
            justify-content: center;
        }

        .list {
            list-style: none;
        }

        .subheading {
            font-weight: 700;
            font-size: 24px;
        }
    </style>
</head>
<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand judul" href="{{ route('base')}}">SiPEKA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('base')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#karakteristik">Karakteristik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#manfaat">Manfaat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#metode">Metode</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Demo
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('bmi') }}">BMI</a></li>
                  <li><a class="dropdown-item" href="{{ route('sipenma')}}">Sistem Penilaian Mahasiswa</a></li>
                  <li><a class="dropdown-item" href="{{ route('pemeringkatan') }}">Pemeringkatan Mahasiswa</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

      {{-- main --}}
      <section class="container mt-5 mb-5">
        <div class="row">
            <div class="container col-md-6">
                <h1 class="text-start">Sistem Pendukung Keputusan</h1>
                <p class="text-start">Sistem Pendukung Keputusan (SPK) adalah sebuah sistem komputer yang dirancang untuk membantu pengambilan keputusan dalam suatu organisasi atau lingkungan tertentu. DSS menyediakan alat, data, dan metode yang dibutuhkan oleh para pengambil keputusan untuk menganalisis informasi dan menghasilkan keputusan yang lebih baik dan lebih terinformasi.</p>

            </div>

            <div class="container col-md-6">
                <img class="img-fluid rounded" src="https://lp2m.uma.ac.id/wp-content/uploads/2023/08/DSS.jpg" alt="" srcset="">
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="col">
            <h2 class="text-center" id="karakteristik"> Karakteristik Sistem Pendukung Keputusan</h2>

        </div>

        <div class="row text-center mx-3 my-3 p-5 gap-5">
            <div class="col circle">Interaktif</div>
            <div class="col circle">Adaptif</div>
            <div class="col circle">Terstruktur</div>
            <div class="col circle">Tersentralisasi</div>
        </div>
    </section>

    <section class="container my-5">
        <div class="col">
            <h2 class="text-center mb-3" id="manfaat"> Manfaat Sistem Pendukung Keputusan</h2>
            <p class="ms-2 mt-3">Manfaat Sistem Pendukung Keputusan (SPK) antara lain,</p>
        </div>

        <div class="row">
            <div class="container col-md-6 mt-1">
                <ul>
                    <li>Meningkatkan Pengambilan Keputusan</li>
                    <li>Mempercepat Proses Keputusan</li>
                    <li>Reduksi Ketidakpastian</li>
                    <li>Peningkatan Efisiensi</li>
                    <li>Pemantauan Kinerja</li>
                    <li>Analisis Data yang Mendalam</li>
                    <li>Skenario Pengambilan Keputusan</li>
                    <li>Integrasi Data</li>
                    <li>Meningkatkan Produktivitas</li>
                </ul>
            </div>

            <div class="container col-md-6 text-center">
                <img class="img-fluid gambar" src="https://img.freepik.com/free-vector/business-decisions-concept-illustration_114360-4096.jpg" alt="" srcset="">
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="col">
            <h2 class="text-center mb-3" id="metode"> Metode-metode Dalam Sistem Pendukung Keputusan</h2>
        </div>

        <div class="row" mt-3>
            <div class="container col-md-6">
                <ul class="list">
                    <li class="subheading">1. Metode SAW (Simple Additive Weighting)</li>
                    <p>Metode ini menggabungkan bobot kriteria dan nilai kinerja alternatif untuk menghitung skor total, memungkinkan pemilihan alternatif dengan skor tertinggi.</p>
                    <li class="subheading">2. Metode AHP (Analytic Hierarchy Process):</li>
                    <p>AHP menggunakan struktur hirarkis untuk membandingkan kriteria dan alternatif dengan matriks perbandingan berpasangan, menghasilkan bobot kriteria dan skor alternatif.</p>
                    <li class="subheading">3. Decision Tree</li>
                    <li>Ini mengorganisasi data ke dalam struktur berhirarki yang terdiri dari simpul (node) yang mewakili pertanyaan atau keputusan dan cabang-cabang yang mewakili kemungkinan hasil. Ingin mencoba decision tree? klik <a href="https://creately.com/lp/decision-tree-maker-online/" target="_blank"><strong style="color: #008170">disini</strong></a></li>
                    <li class="subheading">4. Metode ELECTRE (Elimination and Choice Expressing Reality):</li>
                    <p>ELECTRE mengidentifikasi alternatif yang memenuhi kriteria tertentu dengan mempertimbangkan perbedaan antaralternatif dan ambang batasan.</p>
                    <li class="subheading">5. Metode TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution)</li>
                    <p>TOPSIS membandingkan alternatif dengan solusi ideal positif dan solusi ideal negatif, dan menghitung jarak relatif, kemudian memilih alternatif terdekat dengan solusi ideal positif.</p>
                </ul>
            </div>
        </div>
    </section>


      {{-- //main --}}

    <section class="fixed-bottom footer mt-5">
        <p>@copyright 2023</p>
    </section>

</body>
</html>
