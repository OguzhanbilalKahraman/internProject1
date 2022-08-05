<?php

    session_start();

    require('sqlbaglanti.php');
    extract($_POST);

    if(isset($_POST['kullaniciadi']) && isset($_POST['sifre']) ){
      $kullaniciadi = $_POST['kullaniciadi'];
      $sifre = $_POST['sifre'];
    
    }

    
    //$kullaniciadi = $_POST['kullaniciadi'];
    //$sifre = $_POST['sifre'];
    

    if(isset($_POST['kullaniciadi']) and isset($_POST['sifre'])){

        extract($_POST);


        $sifre = hash('sha256', $_POST['sifre']);

        //$sql = "SELECT * FROM 'kullanicilar' WHERE kullaniciadi = '$kullaniciadi' and sifre='$sifre'";

        $sql = "SELECT * FROM `kullanicilar` WHERE kullaniciadi='$kullaniciadi' and sifre='$sifre'"; 
        $cevap= mysqli_query($baglanti,$sql);
    
       $row=mysqli_fetch_array($cevap);
       

       setcookie('id',$row['id'],time() + (86400 * 30), "/");

       setcookie('kullaniciadi',$row['kullaniciadi'],time() + (86400*30),"/");

       setcookie('randevu_id',$row['randevu_id'],time() + (86400*30),"/");

      

        if(!$cevap ){ 

            echo '<br>Hata:' . mysqli_error($baglanti); 
        
        } 


        $say = mysqli_num_rows($cevap);


        if($say != 1){
            $mesaj="<h1> Hatalı Kullanıcı adı veya hatalı şifre!</h1>";

        }
        else{
            $_SESSION['kullaniciadi'] = $kullaniciadi;

        }


    }
        

       
    if(isset($_SESSION['kullaniciadi'])){

            header("Location: uyesayfasi.php");

        }




    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Login</title>
    </head>
    <style>
          body{
               /* background-color: gray;
              
              background-image: url('ku4.jpg');
              background-size: cover;
*/
          } 



      </style>
  
    <body >
     <div class="container">
     <div class="page-header">
     <h1>Randevu Sistemine Hosgeldiniz</h1>      
     </div>
    <p>Kalite herkesin hakkı.</p>      
    <p>Saç kesimi tesadüf degildir.</p>      
    </div>
    
    <div class="jumbotron text-center">
    
        <form action="<?php $_PHP_SELF ?>" method="POST">
        Kullanici Adi:
        <input type="text" name="kullaniciadi"><br />
        Sifre:
        <input type="password" name="sifre"><br />
        <input type="submit" value="GİRİŞ"/><br /><br />
        <a href="kayitol.php">[Kayıt Ol]</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Kuafor</h3>
                    <p>
    <a href="mailto:iletisimkufaor@gmail.com"><span class="glyphicon glyphicon-envelope">iletisimkuafor@gmail.com</span></a>
  </p>
             </div>
                    <div class="col-sm-4">
                      <h3>Randevu</h3>
                     <p>Randevu için lütfen kayıt olun</p>
                         </div>
                      <div class="col-sm-4">
                     <h3>Sistemi</h3>
                    <p>Kayıt olduktan sonra randevu alabilirsiniz.</p>
             </div>
                </div>
            </div>
            
<!--
<div class="media">
  <div class="media-left">
    <img src="JW.jpg" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h4 class="media-heading">John Wick</h4>
    <p>Sinirlendiğimde saç kesimine geliyorum VE RAHATLIYORUM...</p>
  </div>
</div>


<div class="media">
  <div class="media-body">
    <h4 class="media-heading">fightclub</h4>
    <p>Lanet olsun adamım ! Burada saç kesitrene kadar tüm kuaförler aynı zannediyordum.</p>
  </div>
  <div class="media-right">
    <img src="bradpitt.png" class="media-object" style="width:60px">
  </div>
</div>

        -->

        </body>
   
    </html>