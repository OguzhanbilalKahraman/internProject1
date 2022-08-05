<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Randevu Listesi</title>
</head>
<style>
    body{
        background-image: url('dukkanici.jpg');

        background-size: cover;

    }
    </style>
<body>
<div class="jumbotron text-center">
<div class="text-success">
    <?php
    include("sqlbaglanti.php");
  //  echo 'id =' .$_COOKIE['id'];
   // $kullaniciadi=$_POST['kullaniciadi'];

    
    if(isset($_COOKIE['id']) ){
        $kullaniciId=$_COOKIE['id'];
       // $kullaniciadi=$_POST['kullaniciadi'];

    }
    // if(isset($_COOKIE['kullaniciadi']) ){
    //     $kullaniciadi=$_COOKIE['kullaniciadi'];
       
    // }
   // $id=$_POST['id'];
   // $musteriadi=$_POST['musteriadi'];


    $sql= "SELECT * FROM randevu where kullaniciId=$kullaniciId";


    
    $cevap = mysqli_query($baglanti,$sql);
 
     if(!$cevap){

         echo '<br>Hata:'.mysqli_Error($baglanti);

     }
     echo "<table border=2 align=center>";
     echo "<tr><th>id</th><th>Randevu id</th><th>rtarih</th><th>rsaat</th>";


     while($gelen=mysqli_fetch_array($cevap))
    {
        echo "<tr><td>".$gelen['kullaniciId']."</td>";
        echo "<td>".$gelen['randevu_id']."</td>";
        echo "<td>".$gelen['rtarih']."</td>";
        echo "<td>".$gelen['rsaat']."</td></tr>";

     }

     echo"</table><br />";

     mysqli_close($baglanti);

     echo "Yeni kayıt eklemek için <a href='randevuform.php'>tıklayınız</a><br /><br />";
     echo "Ana sayfanıza dönmek için <a href='uyesayfasi.php'>tıklayınız</a>";
     

?>
</div>
    </div>


</body>
</html>