<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator BMI</title>
    <link rel = "icon" href = "https://cdn.discordapp.com/attachments/764727363253829675/1160549610234839050/5b2694795074b9c153754f3b9a454c4248a11d86_s2_n2_y1-removebg-preview.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container d-flex justify-content-center mt-3">
        <div class="card shadow" style="width:18rem">
            <div class="card-body">
                <h5>Jenis Kelamin</h5>
                <div class="container ml-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pria" value="Pria">
                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="wanita" value="Wanita">
                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                    </div>
                </div>
                <form action="" method="get">
                    <div class="form-group">
                        <label for="">Tinggi Badan</label>
                        <input type="text" name="tb" required>
                    </div>
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="text" name="bb" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-2" name="hitung">Hitung</button>
                </form>
            </div>
            <?php
                if(isset($_GET['hitung'])){
                    $tb = $_GET['tb'];
                    $bb = $_GET['bb'];
                    $tbHasil = $_GET['tb']/100;
                    $hasil = $bb / ($tbHasil * $tbHasil);

                    if($hasil <= 18.5){
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan : <b> '.$tb.' Cm</b><br>
                                    Berat Badan  : <b> '.$bb.' Kg</b><br>
                                    Hasil        : <b> '.number_format($hasil,1).'</b><br>
                                    Keterangan: <b> Kurus</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 25) {
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan : <b> '.$tb.' Cm</b><br>
                                    Berat Badan  : <b> '.$bb.' Kg</b><br>
                                    Hasil        : <b> '.number_format($hasil,1).'</b><br>
                                    Keterangan: <b> Normal</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil <= 29.9) {
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan : <b> '.$tb.' Cm</b><br>
                                    Berat Badan  : <b> '.$bb.' Kg</b><br>
                                    Hasil        : <b> '.number_format($hasil,1).'</b><br>
                                    Keterangan: <b> Gemuk</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif ($hasil > 30) {
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan : <b> '.$tb.' Cm</b><br>
                                    Berat Badan  : <b> '.$bb.' Kg</b><br>
                                    Hasil        : <b> '.number_format($hasil,1).'</b><br>
                                    Keterangan: <b> Obesitas</b>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>

    <div class="container">
        <h1>Keterangan BMI menurut WHO</h1>
        <table class="table table-hover">
            <tr>
                <th>Keterangan</th>
                <th>Rating</th>
            </tr>
            <tr>
                <td>Kurus</td>
                <td>< 18.5</td>
            </tr>
            <tr>
                <td>Normal</td>
                <td>< 25</td>
            </tr>
            <tr>
                <td>Gemuk</td>
                <td>< 29.9</td>
            </tr>
            <tr>
                <td>Obesitas</td>
                <td>≥ 30</td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
