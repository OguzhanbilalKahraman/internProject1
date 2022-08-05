<?php
    session_start();

//     $kullaniciadi=$_POST['kullaniciadi'];


//    if(!isset($_POST['kullaniciadi'])){

//         header("Location:giris.php");
//         exit;
//     }



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
    <title>Anasayfa</title>
</head>
<style>
  body {
    background-image: url('ku.jpg');
       
        background-size: cover;
  }
</style>
<body>
<div class="jumbotron text-center">
<div class="text-success">
    <h1>Sayfanıza hoş geldiniz.</h1>
    <p1>Aşağıdaki seçeneklerden gerekli işlemlerinizi gerçekleştirebilirsiniz.</p1><br />
   <!-- <a href='cikis.php'>Çıkış yapmak için tıklayın.</a> -->
   
    
        <a href="randevuform.php">Randevu oluşturmak için tıklayın</a><br />
        <a href="kayitguncelle.php">Randevu güncellemek için tıklayın</a><br />
        <a href="listele.php">Randevularınızı listelemek için tıklayın</a><br />
        <a href="randevusil.php">Randevularınızı silmek için tıklayın</a><br />
        <a href="cikis.php">Çıkış yapmak için tıklayın</a><br />
   
</div>
</div>


</body>
</html>