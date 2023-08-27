<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php

        function generateRandomFloat(float $minValue, float $maxValue): float
        {
            return $minValue + mt_rand() / mt_getrandmax() * ($maxValue - $minValue);
        }

        $minValue = 2.9;
        $maxValue = 3.4;
        $randIpk = generateRandomFloat($minValue, $maxValue);  

/*         function SetDisable($randIpk) {
            $result = "";
            if($randIpk < 3){
                $result = "disabled";
            }
            return $result;
        }  */
    ?>

    <div class="container-fluid p-3 text-center bg-primary text-white">
        <h2>Daftar Pengajuan Baru</h2>
        <p>Kampusku Jaya Jaya Jaya</p>
    </div>

    <div class="container mt-5">
        <div class="card border-primary mb-3 mx-auto" style="max-width: 65rem;">
            <div class="card-header">Registrasi Beasiswa</div>
            <div class="card-body text-primary">
                
                <form class="form-horizontal" action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="nama">Masukkan Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Anda" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="email">Masukkan Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="hp">Nomor Hp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hp" placeholder="08xxxxxxxxxx" name="hp" required>
                        </div>
                    </div>

                        <div class="form-group row">
                        <label class="control-label col-sm-2" for="semester">Semester Saat Ini</label>
                        <select class="form-control col-sm-10" name="semester" required> 
                                <option>Semester 1</option>
                                <option>Semester 2</option>
                                <option>Semester 3</option>
                                <option>Semester 4</option>
                                <option>Semester 5</option>
                                <option>Semester 6</option>
                                <option>Semester 7</option>
                                <option>Semester 8</option>
                        </select>
                    </div> 
 
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="ipk">IPK Terakhir</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="ipk" name="ipk" value="<?php echo  $randIpk; ?>" required disabled> 
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="beasiswa" >Pilihan Beasiswa</label>
                        <select class="form-control col-sm-10" id="beasiswa" name="beasiswa" required>
                                <option>Beasiswa Akademik</option>
                                <option>Beasiswa Non-Akademik</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="berkas">Berkas Syarat</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="berkas" name="berkas">
                        </div>
                    </div>  

                    <button type="submit" class="btn btn-secondary" value= "daftar" name="daftar">Submit</button>
<!--                     <button type="submit" class="btn btn-secondary" value= "daftar">Submit</button> -->
                    <a href="./index.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Batal</a>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="footer text-center">
        <p>Copyright @ Yusri Alfiyya 2023</p>
    </div>
    


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>