<?php
//randevu güncelleme

include("sqlbaglanti.php");
extract($_POST);
//$randevu_id=$_COOKIE['randevu id'];
//echo $randevu_id;
//exit;

if(isset($_COOKIE['id'])){
    $kullaniciId=$_COOKIE['id'];



}

if(isset($_COOKIE['randevu_id']) ){
    $randevu_id=$_COOKIE['randevu_id'];
   // $kullaniciadi=$_POST['kullaniciadi'];


}

// $rtarih=$_POST['rtarih'];
// $rsaat=$_POST['rsaat'];

if(isset($_POST['rtarih']) && isset($_POST['rsaat'])){

    $rtarih=$_POST['rtarih'];
    $rsaat=$_POST['rsaat'];
echo $rtarih;
exit;
}




$sql= "UPDATE randevu". 
      "SET rtarih='$rtarih', rsaat='$rsaat'".
      "WHERE kullaniciId=$kullaniciId";



$cevap=mysqli_query($baglanti,$sql);


if(!$cevap){
    echo '<br>HATA:'. mysqli_error($baglanti);
}

else{
    echo "Kayıt Güncellendi.";
    echo "<br><a href='listele.php'>Listele</a>\n";

}
mysqli_close($baglanti);









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Guncelleme</title>
</head>
<body>





</body>
</html>