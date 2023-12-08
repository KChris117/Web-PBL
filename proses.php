<?php
include 'koneksi.php';
$user= $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password'];

$pass_acak=password_hash($pass, PASSWORD_DEFAULT);
$input = mysqli_query($koneksi, "INSERT INTO user VALUES ('$user','$email','$pass_acak')") or die(mysql_error());
if($input){
    echo"data berhasil disimpan";
    header("location:login.php");
}else{
    echo "gagal";
}
?>