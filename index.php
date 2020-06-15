<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venturo Camp Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                Venturo Camp - TEST
            </div>
            <div class="card-body">
                <form class="form-inline" method="get" action="">
                    <div class="form-group mb-2">
                        <select name="tingkat" class="form-control mr-4">
                            <option selected>Choose...</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info mb-2">Tampilkan</button>
                </form>
                <hr />
                <?php
                if (isset($_GET['tingkat'])) {
                    $data = [
                        [
                            'SMP 01 Malang'        =>
                            [
                                'alamat' => 'Jl Mawar No 01',
                                'tlp'    => '0341998822',
                            ],
                            'SMA 01 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 01 No 41',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 02 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 03 No 4',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 03 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 04 No 1',
                                'tlp'    => '0341872819',
                                'siswa'  => [
                                    [
                                        'nis'       => 'sma3001',
                                        'nama'      => 'Muhammad',
                                        'tgl_lahir' => '18 Januari 1996',
                                    ],
                                    [
                                        'nis'       => 'sma3002',
                                        'nama'      => 'Inayah',
                                        'tgl_lahir' => '24 Januari 1994',
                                    ],
                                ],
                            ],
                            'SMA 04 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 04 No 3',
                                'tlp'    => '0341872819',
                                'siswa'  => [
                                    [
                                        'nis'       => 'sma4001',
                                        'nama'      => 'sutejo',
                                        'tgl_lahir' => '18 Januari 1994',
                                    ],
                                    [
                                        'nis'       => 'sma4002',
                                        'nama'      => 'sutijan',
                                        'tgl_lahir' => '24 Januari 1998',
                                    ],
                                ],
                            ],
                            'SMA 05 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 05 No 5',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 06 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 06 No 8',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 07 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 07 No 81',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 08 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 08 No 11',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 09 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 09 No 121',
                                'tlp'    => '0341872819',
                            ],
                            'SMA 10 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 10 No 451',
                                'tlp'    => '0341872819',
                            ],
                            'SMK 01 Malang'        =>
                            [
                                'alamat' => 'Jl SMA 01 No 21',
                                'tlp'    => '0341928192',
                            ],
                            'SMK 01 Malang'        =>
                            [
                                'alamat' => 'Jl SMK 01 No 11',
                                'tlp'    => '0341928192',
                            ],
                            'SMK 02 Malang'        =>
                            [
                                'alamat' => 'Jl SMK 02 No 31',
                                'tlp'    => '0341928192',
                            ],
                            'SMK 03 Malang'        =>
                            [
                                'alamat' => 'Jl SMK 03 No 21',
                                'tlp'    => '0341928192',
                            ],
                            'SMK 04 Malang'        =>
                            [
                                'alamat' => 'Jl Panjaitan No 21',
                                'tlp'    => '0341928192',
                            ],
                            'SMK 05 Malang'        =>
                            [
                                'alamat' => 'Jl Panjaitan No 21',
                                'tlp'    => '0341928192',
                                'siswa'  => [
                                    [
                                        'nis'       => 'smk5001',
                                        'nama'      => 'rani',
                                        'tgl_lahir' => '18 Januari 1994',
                                    ],
                                    [
                                        'nis'       => 'smk5002',
                                        'nama'      => 'rahayu',
                                        'tgl_lahir' => '24 Januari 1998',
                                    ],
                                ],
                            ],
                            'SMK 06 Malang'        =>
                            [
                                'alamat' => 'Jl Panjaitan No 21',
                                'tlp'    => '0341928192',
                                'siswa'  => [
                                    [
                                        'nis'       => 'smk6001',
                                        'nama'      => 'sutejo',
                                        'tgl_lahir' => '18 Januari 1994',
                                    ],
                                    [
                                        'nis'       => 'smk6002',
                                        'nama'      => 'sutijan',
                                        'tgl_lahir' => '24 Januari 1998',
                                    ],
                                ],
                            ],
                            'SMK Kesehatan Malang' =>
                            [
                                'alamat' => 'Jl Dr Soetomo No 25',
                                'tlp'    => '0341587212',
                            ],
                            'SMP 02 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 02 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 03 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 03 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 04 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 04 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 05 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 05 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 06 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 06 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 07 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 07 No 25',
                                'tlp'    => '034192812',
                                'siswa'  => [
                                    [
                                        'nis'       => 'smp7001',
                                        'nama'      => 'Lala',
                                        'tgl_lahir' => '18 Januari 1998',
                                    ],
                                    [
                                        'nis'       => 'smp7002',
                                        'nama'      => 'Luluk',
                                        'tgl_lahir' => '24 Juli 1997',
                                    ],
                                ],
                            ],
                            'SMP 08 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 08 No 25',
                                'tlp'    => '034192812',
                                'siswa'  => [
                                    [
                                        'nis'       => 'smp8001',
                                        'nama'      => 'Ahmad',
                                        'tgl_lahir' => '18 Januari 1994',
                                    ],
                                    [
                                        'nis'       => 'smk8002',
                                        'nama'      => 'Memel',
                                        'tgl_lahir' => '21 Maret 1996',
                                    ],
                                ],
                            ],
                            'SMP 09 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 09 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 10 Malang'        =>
                            [
                                'alamat' => 'JL SMP 10 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 11 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 11 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 12 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 12 No 25',
                                'tlp'    => '034192812',
                            ],
                            'SMP 13 Malang'        =>
                            [
                                'alamat' => 'Jl SMP 13 No 25',
                                'tlp'    => '034192812',
                            ],
                        ]
                    ];

                    foreach ($data as $key) {
                        foreach ($key as $sekolah => $value) {
                            $skl = substr($sekolah, 0, 3);
                            if($skl == $_GET['tingkat']){
                                foreach($data as $dataSekolah){
                                    $alamat = $dataSekolah[$sekolah]["alamat"];
                                    $tlp = $dataSekolah[$sekolah]["tlp"];
                                    $siswa = isset($dataSekolah[$sekolah]["siswa"]) ? $dataSekolah[$sekolah]["siswa"] : "";
                                }
                                ?>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row mb-0">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">NAMA SEKOLAH</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly="" class="form-control-plaintext font-weight-bold" value=": <?= $sekolah ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">TELEPON SEKOLAH</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly="" class="form-control-plaintext font-weight-bold" value=": <?= $tlp ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">ALAMAT SEKOLAH</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly="" class="form-control-plaintext font-weight-bold" value=": <?= $alamat ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="bg-light">
                                                <th><b>NIS</b></th>
                                                <th><b>NAMA</b></th>
                                                <th><b>TANGGAL LAHIR</b></th>
                                            </tr>
                                            <?php
                                                    if($siswa != ""){
                                                        foreach ($siswa as $dataSiswa) {
                                                            ?>
                                                            <tr>
                                                                <td align="center"><?= $dataSiswa["nis"] ?></td>
                                                                <td align="center"><?= $dataSiswa["nama"] ?></td>
                                                                <td align="center"><?= $dataSiswa["tgl_lahir"] ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <tr>
                                                            <td colspan="3" align="center">tidak ada siswa</td>
                                                        </tr>
                                                        <?php      
                                                    }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                                <?php
                            }else{

                            }
                        }
                    }
                ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>