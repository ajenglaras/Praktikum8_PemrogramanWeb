<?php
//script untuk mengoneksikan ke database
    $host="localhost";
    $user="root";
    $password="";
    $db="formulir_peserta_didik";

    $kon = mysqli_connect($host,$user,$password,$db);
        if (!$kon){
            die("Koneksi gagal:".mysqli_connect_error()); //jika gagal maka akan menampilkan koneksi gagal
        }

?>