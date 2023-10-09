<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leaderboard</title>
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
        
        <link rel = "icon" href = "https://cdn.discordapp.com/attachments/764727363253829675/1160549610234839050/5b2694795074b9c153754f3b9a454c4248a11d86_s2_n2_y1-removebg-preview.png" type = "image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <style>
        body {
            font-family: Georgia, serif;
            background: #161532;
    }
        h1 {
            color: white;
        }
        table {
            border-spacing: 0;
            border-collapse: separate;
            border-radius: 4px;
            border: 1px solid black;
            }
        td, th {
            border: none;
        }
    </style>
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
                  <li><a class="dropdown-item" href="{{ route('sipenma')}}">Sistem Penlaian Mahasiswa</a></li>
                  <li><a class="dropdown-item" href="{{ route('pemeringkatan') }}">Pemeringkatan Mahasiswa</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

        {{-- main --}}
        <div class="container d-flex justify-content-center mt-3">
            <h1>Leaderboard</h1>
        </div>

        <div class="container d-flex justify-content-center">
            <table class="table table-warning mt-3" style="width:20rem">
                <tr>
                    <th style="padding-left: 1px;"><img width="25" height="20" src="https://img.icons8.com/color/24/crown.png" alt="crown"/></th>
                    <th>Name</th>
                    <th>Point</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fance Muhammad</td>
                    <td>1337</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kristus</td>
                    <td>6969</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Yesus Sidharta</td>
                    <td>666</td>
                </tr>
            </table>
        </div>

        <section class="fixed-bottom footer mt-5">
            <p>@copyright 2023</p>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>

