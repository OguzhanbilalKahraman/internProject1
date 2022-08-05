<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<style>
    body{
        background-image: url('ku3.jpg');

        background-size: cover;


    }


    </style>
<body>
<div class="jumbotron text-center">
<div class="text-success">
    
    <?php
    include('sqlbaglanti.php');

    if(isset($_COOKIE['id']) ){
        $kullaniciId=$_COOKIE['id'];
       // $kullaniciadi=$_POST['kullaniciadi'];

    }

    
    if(isset($_COOKIE['randevu_id']) ){
        $randevu_id=$_COOKIE['randevu_id'];
       // $kullaniciadi=$_POST['kullaniciadi'];

    }

    // if(isset($_COOKIE['kullaniciadi'])){

    //     $kullaniciadi=$_COOKIE['kullaniciadi'];
    // }

    $sql="SELECT * FROM randevu WHERE kullaniciId=$kullaniciId";


   
  
    $cevap=mysqli_query($baglanti,$sql);

    if(!$cevap){

        echo'<br />HATA' . mysqli.error($cevap);
    }

    echo "<table border=2 align=center>";
    echo "<tr><th>randevu id</th><th>kullanici id</th><th>rtarih</th><th>rsaat</th>";


    while($gelen=mysqli_fetch_array($cevap))
    {
      // echo "<tr><td>".$gelen['kullaniciId']."</td>";
      // echo "<td>".$gelen['id']."</td>";

        echo "<tr><td>".$gelen['randevu_id']."</td>";
        echo "<td>".$gelen['kullaniciId']."</td>";
        echo "<td>".$gelen['rtarih']."</td>";
        echo "<td>".$gelen['rsaat'],"</td>";
        echo "<td><br /><a href=kayitsil.php?id=".$gelen['randevu_id'].">Sil</a><br /></td></tr>"; 


    }

    echo"</table><br />";

    echo "Anasayfaya dönmek için <a href='uyesayfasi.php'>tıklayınız</a>\n";





    ?>
    </div>
</div>
</body>
</html>






