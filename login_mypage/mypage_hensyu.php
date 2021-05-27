<?php
mb_internal_encoding("utf8");

if(empty($_POST['from_mypage'])){
  header("Location:login_error.php");
}
session_start();
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title>マイページ登録</title>
 <link rel="stylesheet" href="mypage_hensyu.css" type="text/css">
</head>

<body>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="logout"><a href="log_out.php">ログアウト</a></div>
</header>

<main>
  <div class="confirm">
    <h2>会員登録</h2>

     <div class="Q">
       <p>こんにちは！<?php echo $_SESSION['name'];?>さん</p>
      </div> 

  <form action="mypage_update.php" method="post" >

      <div class="profile_pic">
       <img src="<?php echo $_SESSION['picture'];?>">
      </div>
      
    <div class=main>


      <p>氏名：
        <input type="text" value="<?php echo $_SESSION['name'];  ?>" name="name">
      </p>

      <p>メール：
      <input type="text" value="<?php echo $_SESSION['mail'];?>" name="mail">
        
      </p>

      <p>パスワード：
      <input type="text" value="<?php echo $_SESSION['password'];?>" name="password">
      </p>
    </div>

      <div class="comments">
      <textarea name="comments" cols="70" rows="5" ><?php echo $_SESSION['comments'];?></textarea>

      </div>
      
        <div class="toroku">
          <input type="submit" class="button2" value="この内容に変更する">
        </div>
  </form>

  </div>
  </main>

  <footer>
  © 2018 InterNous.inc.All rights reserved
  </footer>
</body>
</html>