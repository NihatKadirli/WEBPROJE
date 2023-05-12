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
      <input type="text" id="username" name="username"><br><br>
      <label for="password" style="font-size: 20px;">Şifre:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Giriş Yap">

    </form>
    <link rel="stylesheet" href="web.css">
  </body>



<div id="main">
    <h1>Basit bir login</h1>
    <form method="POST">
        Kullanıcı Adı <input type="text" name="username" class="text" required>
        Şifre <input type="password" name="password" class="text" required>
        <input type="submit" name="submit" id="sub">
    </form>

</div>
    

</html>


<?php
if(isset($_POST['submit'])){
    $un=$_POST['username'];
    $pw=$_POST['password'];

       if($un=='username'&& $pw=='password'){
       header("location:anasayfa.html" );
          exit();
      }
      
      else
      echo "YALNIŞ KULLANICI ADI VE ŞİFRE";


}



?>