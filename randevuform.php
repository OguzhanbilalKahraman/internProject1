<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Randevu olustur</title>
</head>
<style>
  body {
    background-image: url('ku2.jpg');
       
        background-size: cover;
  }
</style>
<body>
<div class="jumbotron text-center">
<div class="text-success">

    <h1>Randevu Oluşturma Forumuna Hoşgeldiniz.</h1>

    <form action="randevuolustur.php" method="POST">
        <input type="hidden" name="randevu_id" value="">
    Randevu Olusturmak Istediginiz Tarih:
    <input type="date" name="rtarih"><br /><br />
    Randevu Olusturmak Istediginiz Saat:
    <input type="time" name="rsaat"><br /><br />
    <input type="submit" value="RANDEVU OLUŞTUR"><br /><br />
    <a href='uyesayfasi.php'>Anasayfaya gitmek için tıklayınız</a>
    

</div>
</div>
    
</body>
</html>