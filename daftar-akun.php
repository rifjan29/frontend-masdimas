<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shayna | Template</title>

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
</head>

<body>
<?php
if(isset($_POST['tombol'])){
    session_start();
    include 'konek.php';
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $nohp=$_REQUEST['nohp'];
    $password=$_REQUEST['password'];
    $password2=$_REQUEST['password2'];
    $alamat=$_REQUEST['alamat'];
    $kodepos=$_REQUEST['kodepos'];
    $input=mysqli_query($con ,"insert into pengguna values
('$username','$email','$nohp','$password','$password2','$alamat','$kodepos')");
    
    if($input){
        $_SESSION['berhasil-daftar'] = "Berhasil Mendaftar silahkan login !";
        header("location:login.php");
        exit();
    } else {
       
    }
    
    }
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-10 col-lg-7 mx-auto">
        <div class="card my-5 shadow p-3 mb-5 bg-white rounded" style="border: none;">
          <div class="card-body">
            <div class="card-title">
                <h5 class="text-center text-uppercase font-weight-bold">Daftar Akun !</h5>        
            </div>
            <form method="post" action="daftar-akun.php">
               <div class="form-group">
                    <label for="exampleInputPassword1" class="mr-1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label><span class="badge badge-danger">Wajib</span>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Masukkan Email dengan benar</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label><span class="badge badge-danger">Wajib</span>
                    <input type="number" name="nohp" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No HP">
                    <small id="emailHelp" class="form-text text-muted">Masukkan No HP dengan benar</small>
                </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Password</label><span class="badge badge-danger">Wajib</span>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi Password</label><span class="badge badge-danger">Wajib</span>
                    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi password">
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kode Pos</label>
                <input type="text" name="kodepos" class="form-control" id="exampleInputPassword1" placeholder="Kode Post">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label><span class="badge badge-danger">Wajib</span>
                <textarea name="alamat" class="form-control"></textarea>
              </div>
              <button type="submit" name="tombol" class="btn btn-primary btn-block">Simpan</button>
            </form>
            <div class="form-group text-center">
                <div class="col-md-12 control">
                     <div style=" padding-top:15px; font-size:85%" >
                            Sudah mempunyai akun !
                        <a href="login.php">
                            Masuk kembali?
                         </a>
                    </div>
                </div>
            </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


</html>