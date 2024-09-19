<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_todo";

    $connection = mysqli_connect($host, $username, $password, $dbname);

    if($connection){
        echo "Koneksi Sukses";
    }

?>