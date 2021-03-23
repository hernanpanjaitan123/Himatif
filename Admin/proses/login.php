<?php 
session_start();
  // skrip koneksi
$koneksi = new mysqli("localhost", "root", "", "himatif1");

         if(isset($_POST['login']))
         {
          $username = mysqli_real_escape_string($koneksi,$_POST['user']);
         $password = mysqli_real_escape_string($koneksi,$_POST['pass']);
         // $hash = password_hash($password, PASSWORD_DEFAULT);
          // var_dump($hash);
          $ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE username='$username' AND role='admin' AND status_mahasiswa='aktif' ");
          $yangcocok = $ambil->num_rows;
          // $query = "SELECT * FROM users WHERE username = '$username'";  
          //  $result = mysqli_query($koneksi, $query);  
           if($yangcocok>0)  
           {  
                while($row = $ambil->fetch_assoc())  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          $_SESSION['mahasiswa']=$row;
                          echo "<script>location='../index.php';</script>";
                          echo "<script>alert('anda sukses Login');</script>";
                          
                          // return true;
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
          //  else  
          //  {  
          //       echo '<script>alert("Wrong User Details")</script>';  
          //  }  
          // if($yangcocok==1)
          // {
          //   $_SESSION['mahasiswa']=$ambil->fetch_assoc();
          //   echo "<script>alert('anda sukses Login');</script>";
          //   echo "<script>location='../index.php';</script>";
          // } 
          // else{
          //   echo "<script>alert('anda gagal login, periksa akun anda');</script>";
          //   echo "<script>location='../login.php';</script>";
          // }
        }
  ?>