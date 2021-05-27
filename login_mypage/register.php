<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>マイページ登録</title>
<link rel="stylesheet" href="register.css" type="text/css">
</head>

<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
  </header>

  <main>
   <form action="register_confirm.php" method="post" enctype="multipart/form-data">
    <div class="form_contents">

     <h2>会員登録</h2>
      <div class="name">
        <div class=hissu>必須</div><label>氏名</label><br>
          <input type="text" class="formbox" size="40" name="name" required>
      </div>
    
      
      <div class="mail">
        <div class=hissu>必須</div><label>メールアドレス</label><br>        
          <input type="text" class="formbox" size="40" name="mail" pattern="^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$" required>
      </div>

      <div class="password">  
        <div class=hissu>必須</div><label>パスワード(半角英数字6文字以上)</label><br>
          <input type="text" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
      </div>

      <div class=password>
        <div class=hissu>必須</div><label>パスワード確認</label><br>
          <input type="text" class="formbox" size="40" name="password"　id="confirm" oninput="ConfirmPassword(this)" required>
      </div>

      <div class="picture">
        <label>プロフィール写真</label><br>
        <input type="hidden" name="max_file_size" value="1000000">
        <input type="file" size="40" name="picture">
      </div>

      <div class="comments">
       <label>コメント</label><br>
       <textarea name="comments" cols="45" rows="5"></textarea>
      </div>
        
     <div class="toroku">
      <input type="submit" class="submit_button" size="35" value="登録する">
     </div>

    </div>

   </form>
  </main>

  <footer>
  © 2018 InterNous.inc.All rights reserved
  </footer>

   <!-- パスワード確認　最初に入力した数値と確認が一致しているか -->
  <script>
    function ConfirmPassword(confirm){
      var input1=password.value;
      var input2=confirm.value;
      if(input1 !=input2){
        confirm.setCustomValidity("パスワードが一致しません。");
      }else{
        confirm.setCustomValidity('');
      }
    }
  </script>
</body>
</head>
</html>