<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPENMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container d-flex align-items-start mt-3">
        <h1>Sistem Penilaian Mahasiswa</h1>
    </div>
    
    <div class="container d-flex align-items-start mt-3">
        <div class="card shadow" style="width: 50rem">
            <div class="card-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="">Mata Kuliah</label>
                        <select class="form-select" aria-label="Default select example">
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
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="npm" class="col-sm-2 col-form-label">Nomor Pokok Mahasiwa</label>
                        <div class="col-sm-10 mt-3">
                            <input type="number" class="form-control" id="npm" placeholder="Masukkan NPM">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="uts" class="col-sm-2 col-form-label">Nilai UTS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="uts">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="uas" class="col-sm-2 col-form-label">Nilai UAS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="uas">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="tk" class="col-sm-2 col-form-label">Nilai Tugas & Kuis</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tk">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="pre" class="col-sm-2 col-form-label">Presensi</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="pre">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md mt-2 justify-content-center" name="hitung">Hitung</button>
                </form>
            </div>
            <?php
                if(isset($_GET['hitung'])){
                    $uts = $_GET['uts'] * 0.2; 
                    $uas = $_GET['uas'] * 0.3;
                    $tk = $_GET['tk'] * 0.4;
                    $presensi = $_GET['pre'] * 0.1;
                    $hasil = ($uts + $uas + $tk + $presensi);

                    if($hasil <= 40){
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
                }
            ?>
        </div>
    </div>

    

</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

