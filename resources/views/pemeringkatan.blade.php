<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@extends('front')

@section('content')
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pemeringkatan</title>
        

        <link rel = "icon" href = "https://cdn.discordapp.com/attachments/764727363253829675/1160549610234839050/5b2694795074b9c153754f3b9a454c4248a11d86_s2_n2_y1-removebg-preview.png" type = "image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <style>
            html, body {
                margin: 0;
                padding: 0;
                background: #161532;
            }

            .subheading {
                font-weight: 700;
                font-size: 24px;
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


        {{-- main --}}
        <div class="container d-flex justify-content-center mt-3">
            <h1>Leaderboard</h1>
        </div>

        <div class="container my-4 mx-1">
            <div class="container d-flex justify-content-center">
                <table class="table table-warning table-responsive-xl mt-3" style="width:50rem">
                    <tr>
                        <th style="padding-left: 1px;"><img width="25" height="20" src="https://img.icons8.com/color/24/crown.png" alt="crown"/></th>
                        
                        <th>Name</th>
                        <th>NPM</th>
                        <th>Subject</th>
                        <th>Point</th>
                        <th>Grade</th>
                    </tr>

                    @if (Session::has('mahasiswa'))
                        <?php
                            $mahasiswas = Session::get('mahasiswa');
                            function compareNilai($a, $b){
                                return $b[3] - $a[3];
                            }
                            usort($mahasiswas, 'compareNilai');//functionutk calback
                            //sort($mahasiswas);
                            $no = 0;
                            foreach ($mahasiswas as $mhs) {
                                $no++;
                                echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$mhs[0].'</td>
                                    <td>'.$mhs[1].'</td>
                                    <td>'.$mhs[2].'</td>
                                    <td>'.$mhs[3].'</td>
                                    <td>'.$mhs[4].'</td>
                                </tr>';
                                
                            }
                        ?>
                    @endif


                </table>
            </div>

            <div class="container d-flex justify-content-center mb-5">
                <form action="" method="get">
                    <button type="submit" class="btn btn-danger btn-md mt-2 justify-content-center" name="hapus">Hapus Data</button>
                </form>
                <?php
                    if(isset($_GET['hapus'])){
                        Session::forget('mahasiswa');
                        header("Location:".$_SERVER['PHP_SELF']);//refresh current page
                    }
                ?>
            </div>

        </div>
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
    @endsection
