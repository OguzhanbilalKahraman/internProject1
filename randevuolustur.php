<?php

$kullaniciId=$_COOKIE['id'];
$rtarih=$_POST['rtarih'];
$rsaat=$_POST['rsaat'];
echo"$kullaniciId";



require("sqlbaglanti.php");//olmazsa olmaz


$sql="INSERT INTO randevu".  
     "(kullaniciId,rtarih,rsaat)". 
     "VALUES ('$kullaniciId','$rtarih','$rsaat')";
     
     $cevap=mysqli_query($baglanti,$sql);

     header("Location:listele.php");



     if(!$cevap)
    {
        echo '<br>Hata:' . mysqli_error($baglanti); 
    }   

    mysqli_close($baglanti);


   // echo "Anasayfanıza dönmek için <a href='uyesayfasi.php'>tıklayınız</a>";



?>