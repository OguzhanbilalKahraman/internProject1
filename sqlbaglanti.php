<?php
    $server='localhost';

    $user='root';

    $password='';

    $database='a';//database ismi yaz


    $baglanti= mysqli_connect($server,$user,$password,$database); //database bağlanti olusturduk.

    // if($baglanti)
    //     echo "sql baglantisi basarili";
    // else{
    //     echo "HATA" . mysqli_connect_error();
    //     exit;

    // }