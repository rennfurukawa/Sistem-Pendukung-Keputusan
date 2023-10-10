<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPENMA</title>
    <link rel = "icon" href = "https://cdn.discordapp.com/attachments/764727363253829675/1160549610234839050/5b2694795074b9c153754f3b9a454c4248a11d86_s2_n2_y1-removebg-preview.png" type = "image/x-icon">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

    <div class="container d-flex align-items-start mt-3">
        <h1 class="text-center">Sistem Penilaian Mahasiswa</h1>
    </div>

    <div class="container d-flex align-items-start my-5">
        <div class="card shadow" style="width: 50rem">
            <div class="card-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="">Mata Kuliah</label>
                        <select class="form-select" name="matkul" aria-label="Default select example">
                            <option selected>Pilih Mata Kuliah</option>
                            <option value="1">Sistem & Teknologi Informasi </option>
                            <option value="2">Bahasa Inggris</option>
                            <option value="3">Arsitektur Komputer</option>
                            <option value="4">Bahasa Indonesia</option>
                            <option value="5">Matematika Komputasi</option>
                            <option value="6">Etika & Kompetensi Informatika</option>
                            <option value="7">Pancasila</option>
                        </select>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10 mt-3">
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="npm" class="col-sm-2 col-form-label">Nomor Pokok Mahasiswa (NPM)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="npm" placeholder="Masukkan NPM" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="uts" class="col-sm-2 col-form-label">Nilai UTS</label>
                        <div class="col-sm-10">
                            <input type="number" max="100" min="0" class="form-control" name="uts" placeholder="Masukkan Nilai UTS" required>
                        </div >
                    </div>
                    <div class="form-group row mt-2">
                        <label for="uas" class="col-sm-2 col-form-label">Nilai UAS</label>
                        <div class="col-sm-10">
                            <input type="number" max="100" min="0" class="form-control" name="uas" placeholder="Masukkan Nilai UAS" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="tk" class="col-sm-2 col-form-label">Nilai Tugas & Kuis</label>
                        <div class="col-sm-10">
                            <input type="number" max="100" min="0" class="form-control" name="tk" placeholder="Masukkan Nilai Tugas" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="pre" class="col-sm-2 col-form-label">Presensi</label>
                        <div class="col-sm-10">
                            <input type="number" max="100" min="0" class="form-control" name="pre" placeholder="Masukkan Presensi" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md mt-3 justify-content-center" name="hitung">Hitung</button>
                </form>
            </div>
            <?php
                if(isset($_GET['hitung'])){
                    $uts = $_GET['uts'] * 0.2;
                    $uas = $_GET['uas'] * 0.3;
                    $tk = $_GET['tk'] * 0.4;
                    $presensi = $_GET['pre'] * 0.1;
                    $hasil = ($uts + $uas + $tk + $presensi);
                    $predikat = "K";

                    if($hasil <= 40){
                        $predikat = "E";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 0</b><br>
                                    Predikat: <b> E</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 50) {
                        $predikat = "D";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 1</b><br>
                                    Predikat: <b> D</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 55) {
                        $predikat = "C-";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 1.7</b><br>
                                    Predikat: <b> C-</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 60) {
                        $predikat = "C";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 2</b><br>
                                    Predikat: <b> C</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 65) {
                        $predikat = "C+";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 2.3</b><br>
                                    Predikat: <b> C+</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 70) {
                        $predikat = "B-";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 2.7</b><br>
                                    Predikat: <b> B-</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 75) {
                        $predikat = "B";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 3</b><br>
                                    Predikat: <b> B</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 80) {
                        $predikat = "B+";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 3.3</b><br>
                                    Predikat: <b> B+</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 85) {
                        $predikat = "A-";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 3.7</b><br>
                                    Predikat: <b> A-</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil > 85) {
                        $predikat = "A";
                        echo'
                            <div class="card-footer justify-content-end">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Skor        : <b> '.number_format($hasil,1).'</b><br>
                                    Angka Mutu  : <b> 4</b><br>
                                    Predikat: <b> A</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }
                    //store data to session
                    if(isset($_GET['matkul'])){
                        $matkul = isset($_GET['matkul']);
                        if($matkul == 1){
                            $matkul = "Sistem & Teknologi Informasi";
                        }else if($matkul = 2){
                            $matkul = "Bahasa Inggris";
                        }else if($matkul = 3){
                            $matkul = "Arsitektur Komputer";
                        } else if($matkul = 4){
                            $matkul = "Bahasa Indonesia";
                        } else if($matkul = 5){
                            $matkul = "Matematika Komputasi";
                        } else if($matkul = 6){
                            $matkul = "Etika & Kompetensi Informatika";
                        } else if($matkul = 7){
                            $matkul = "Pancasila";
                        }
                        //print_r($matkul);

                        $mahasiswa = collect([$_GET['nama'], $_GET['npm'], $matkul, $hasil, $predikat]);
                        Session::push('mahasiswa', $mahasiswa);
                        //print_r($mahasiswa);
                    }
                    
                    //print_r(Session::get('mahasiswa'));

                    //sort data from session
                    // $mahasiswas = Session::get('mahasiswa');
                    // function compareNilai($a, $b) {
                    //     return $b[1]-$a[1];
                    // }
                    // usort($mahasiswas, 'compareNilai');
                    // foreach ($mahasiswas as $mhs){
                    //     echo $mhs[0] . " -> " . $mhs[1];
                    // }
                    // //print_r(usort($mahasiswas, 'compareNilai'));
                    // print_r(collect($mahasiswas)->max([1])); //ambil satu data terbesar
                }
            ?>
        </div>
    </div>

    <section class="fixed-bottom footer mt-5 p-2">
        <p>@Copyright 2023</p>
    </section>

</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
