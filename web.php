<!DOCTYPE html>
<html>
  <head>
    <title>WEBPROJE</title>

    <h1 style="font-size:xx-large;text-align: center;color: lightgray;">HOŞ GELDİNİZ</h1>
    <h2 style="font-size: xx-large;text-align: center;color: lightgray;">B221210554 NUMARALI ÖĞRENCININ</h2>
    <h3 style="font-size: xx-large;text-align: center;color: lightgray;">SAYFASINA GEÇMEK İÇİN KULLANCI ADI VE ŞİFRENİZİ GİRİNİZ</h3>
  </head>
  <body>
  




    <form action="web.php" method="post">
      <label for="username" style="font-size: 20px;">Kullanıcı Adı:</label>
      <input type="text" id="username" name="username"required><br><br>
      <label for="password" style="font-size: 20px;">Şifre:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Giriş Yap">

    </form>
    <link rel="stylesheet" href="login.css">
  </body>



    

</html>


<?php
if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password']; 

       if($username=='b221210554@sakarya.edu.tr' && $password=="b221210554" ){
       header("location:anasayfa.html" );
          exit();
      }
      
      else
      echo 
      "<h1 st>YALNIŞ KULLANICI ADI VE ŞİFRE,LÜTFEN TEKRAR GİRİNİZ:</h1>";


}



?>