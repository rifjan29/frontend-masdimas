<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel='stylesheet' href='css_admin/profil.css'>
</head>
<body>
	<div class='header'>
        <a href="index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="200" height="80px" src="gambar/logo.png" class="custom-logo"/></a>

        <div class="menu-header-1">
            <div class="a">
                <ul>
                    <li><a href="login.php">Keluar</a></li>
                </ul>
            </div> 
            <div class="b">

            </div>
            <div class="c">
                
            </div>
        </div>
        <div class="menu-header-2">

            

        </div>
    </div>
    <div class="header-2">
        <div class="menu-header-2">
            
        </div>
    </div>
    <div class='tulisan'>
        <div class='isi'>
            <h1>Login Admin</h1>
            <form action="" method="post">
             <table>
                <tr>
                    <td width="110"><p>Username</p></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><p>Password</p></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="tombol" value="Login"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['tombol'])){
            include 'konek.php';
        // mengaktifkan session php
            session_start();

        // menangkap data yang dikirim dari form
            $username = $_POST['username'];
            $password = $_POST['password'];

        // menyeleksi data admin dengan username dan password yang sesuai
            $data = mysqli_query($con,"select * from admin where username='$username' and password='$password'");

        // menghitung jumlah data yang ditemukan
            $cek = mysqli_num_rows($data);

            if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header("location:admin.php");
            }else{
               print "<center>Login Gagal<br><a href=loginadmin.php></a>";
           }

           if(($username == "") && ($password == ""))
           {
            print "<center>Anda belum memasukkan username dan password !<br> Jika belum memiliki akun silahkan registrasi terlebih dahulu";
            exit;
        }

        if($password != $cek['password'])
        {
            print "<center>Password salah !";
        }

    }
    ?>

</div>
</div>

<div class='footer'>
    <p>Copyright 2020 - <a href=''>Jajanan Mas Di Mas</a></p>
</div>

</body>

</html>