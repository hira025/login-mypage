<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>マイページ登録</title>
<link rel="stylesheet" href="login.css" type="text/css">
</head>

<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
  </header>

  <form action="mypage.php" method="post" >

    <div class="main">

     <div class="error">メールアドレスまたはパスワードが間違っています。</div>

      <div class="mail">
        <label>メールアドレス</label><br>        
          <input type="text" class="formbox" size="40" name="mail" pattern="^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$" required>
      </div>

      <div class="password">  
        <label>パスワード</label><br>
          <input type="text" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
      </div>

      <div class="toroku">
      <input type="submit" class="submit_button" size="35" value="ログイン">
     </div>
    </div>
   </form>

   <footer>
     © 2018 InterNous.inc.All rights reserved
    </footer>
</body>
</html>