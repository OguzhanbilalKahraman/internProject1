<?php

include('sqlbaglanti.php');

if(isset($_COOKIE['id'])){
    $kullaniciId=$_COOKIE['id'];

}

$sql= "SELECT * FROM randevu WHERE kullaniciId=$kullaniciId";

$cevap= mysqli_query($baglanti,$sql);

if(!$cevap){
    echo "<br /> HATA:" . mysqli_error($baglanti);
}

$gelen=mysqli_fetch_array($cevap);

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
    <title>Document</title>
</head>
<style>
    body{
        background-image: url('background.jpg');

        background-size: cover;

    }



    </style>

<body>
<div class="jumbotron text-center">
    <form action="randevuguncelleme.php" method="POST">
        Randevu saat:
        <input type="text" name="rsaat" value="<?php echo $gelen['rsaat']?>"/> <br />
        Randevu Tarih:
        <input type="date" name="rtarih" value="<?php echo $gelen['rtarih']?>"/> <br />
        <input type="submit" value="KAYDET"/><br />

        <a href='uyesayfasi.php'>Anasayfa için tıklayın</a>


</form>
</div>


</body>
</html>




