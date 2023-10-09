<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand judul" href="#">SiPEKA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      
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
            <h2 class="text-center"> Karakteristik Sistem Pendukung Keputusan</h2>

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
            <h2 class="text-center mb-3"> Manfaat Sistem Pendukung Keputusan</h2>
            <p class="ms-2">Manfaat Sistem Pendukung Keputusan (SPK) antara lain,</p>
        </div>

        <div class="row">
            <div class="container col-md-6">
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

            <div class="container col-md-6">
                <img class="img-fluid gambar" src="https://img.freepik.com/free-vector/business-decisions-concept-illustration_114360-4096.jpg" alt="" srcset="">
            </div>
        </div>
    </section>


      

    <section class="fixed-bottom footer mt-5">
        <p>@copyright  2023</p>
    </section>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/coba/resources/views/base.blade.php ENDPATH**/ ?>