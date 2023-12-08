<?php

session_start();

include 'koneksi.php';

$user = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from user where username='$user'");
if(mysqli_num_rows($data)>0){
    $row= mysqli_fetch_array($data);

            $_SESSION['username'] = $row['username'];
            $_SESSION['pass'] = $row['password'];

    
        header("location:index_login.php");
}else{
    echo "Data Tidak Valid";
}
?>