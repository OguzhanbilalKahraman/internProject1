<?php


//kayitsil.php

include('sqlbaglanti.php');

 if(isset($_COOKIE['id']) ){
       $kullaniciId=$_COOKIE['id'];
   
}


//$sql= "DELETE  FROM randevu WHERE kullaniciId=".$_COOKIE['id'];

    $sql=" DELETE FROM randevu WHERE kullaniciId=$kullaniciId"; 


    $cevap = mysqli_query($baglanti,$sql);

 
 
  if(!$cevap){

    echo "<br /> HATA:" . mysqli_error($cevap);


  }

else{

    echo "<br /> Randevu kayıtlarınız silindi.<br /> ";

    echo "<a href='listele.php'> Randevuları Listele</a>";

}

mysqli_close($baglanti);


?>


