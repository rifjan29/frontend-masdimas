<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Masdimas</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" href="gambar/logo.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-10 col-lg-7 mx-auto">
          <?php
            session_start();
            if (isset($_SESSION['gagal']) && !empty($_SESSION['gagal'])) {
                ?>
                <div class="alert alert-danger mt-5"><b>Warning!</b> <?=$_SESSION['gagal']; ?>.</div>
                <?php
                unset($_SESSION['gagal']);
            }else{
          
            }
            if (isset($_SESSION['berhasil-daftar']) && !empty($_SESSION['berhasil-daftar'])) {
                ?>
                <div class="alert alert-success mt-5"><b>Warning!</b> <?=$_SESSION['berhasil-daftar']; ?>.</div>
                <?php
                unset($_SESSION['berhasil-daftar']);
            }else{
          
            }
          ?>
        <div class="card my-5 shadow p-3 mb-5 bg-white rounded" style="border: none;">
          <div class="card-body">
            <div class="card-title">
                <h5 class="text-center text-uppercase font-weight-bold">Daftar Akun !</h5>        
            </div>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" name="username" id="formGroupExampleInput" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Masukkan Password" required>
                </div>
                <a type="button" class="btn btn-secondary text-white" href="index.php">Batal</a>
                <button type="submit" name="tombol" class="btn btn-primary">Masuk</button>
            </form>    
                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" class="mt-4">
                                                    Tidak punya akun! 
                            <a href="daftar-akun.php">
                                Daftar akun?
                            </a>
                        </div>
                        <div class="d-flex justify-content-end">
                        <div class="p-2"><a type="button" href="loginadmin.php" class="btn btn-primary text-white">Administrator</a></div>
                        </div>
                    </div>
                </div>
                        
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
        if(isset($_POST['tombol'])){
            session_start();
            include "konek.php";
            // menangkap data yang dikirim dari form
                $username = $_POST['username'];
                $password = $_POST['password'];
                
    
            // // menyeleksi data admin dengan username dan password yang sesuai
                $data = mysqli_query($con,"select * from pengguna where username='$username' and password='$password'");
    
            // // menghitung jumlah data yang ditemukan
                $cek = mysqli_num_rows($data);
    
                if($cek > 0){
                    $data = mysqli_fetch_assoc($data);
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['status'] = "login";
                    header("location:index.php");
                }else{
                    
                    $_SESSION['gagal'] = "Password dan Username Terdapat Kesalahan!";
                    header('Location:login.php');
                   exit;
               }
    
            //    if(($username == "") && ($password == ""))
            //    {
            //     print "<center>Anda belum memasukkan username dan password !<br> Jika belum memiliki akun silahkan registrasi terlebih dahulu";
            //     exit;
            // }
    
            // if($password != $cek['password'])
            // {
            //     print "<center>Password salah !";
            // }
    
        }
    
?>
</html>
