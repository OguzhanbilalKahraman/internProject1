<?php
    require('sqlbaglanti.php');

    if(isset($_POST['kullaniciadi']) && isset($_POST['sifre'])){
        extract($_POST);


        $kullaniciadi=$_POST['kullaniciadi'];
        $eposta=$_POST['eposta'];
        $telno=$_POST['telno'];
        $sifre= hash('sha256', $_POST['sifre']);
        


        

        $sql = "INSERT INTO kullanicilar".  
                "(kullaniciadi,eposta,telno,sifre)".
                "VALUES('$kullaniciadi','$eposta','$telno','$sifre')";

        $cevap= mysqli_query($baglanti,$sql);
    }



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
    <title>Kayit ol</title>
  
</head>
<style>
body {
    background-image: url('ku1.jpg');
       
        background-size: cover;
  }
  </style>
<body>

<div class="jumbotron text-center">
    <?php
    if(isset($mesaj)) echo $mesaj;
    ?>
    <h2>Kayıt Formu</h2>
    <form aciton="<?php $_PHP_SELF ?>" method="POST">
    Kullanıcı Adı:
    <input type="text" name="kullaniciadi"><br />
    E posta:
    <input type="email" name="eposta"><br />
    Telefon Numarası:
    <input type="text" name="telno"><br />
    Şifre:
    <input type="password" name="sifre"><br />
    <input type="submit" value="Kaydet"/><br /> <br />
    <a href="giris.php">[Kullanıcı Girisi]</a>
    </form>
    </div>
    

</body>
</html>