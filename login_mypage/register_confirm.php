<?php
mb_internal_encoding("utf8");

$temp_pic_name=$_FILES['picture']['tmp_name'];
$original_pic_name=$_FILES['picture']['name'];
$path_filename='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE HTML>
<html lang="ja">
  
<head>
<meta charset="UTF-8">
<title>マイページ登録</title>
<link rel="stylesheet" href="register_confirm.css" type="text/css">
</head>

<body>

  <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
  </header>
 <main>
  <div class="confirm">
    <h2>会員登録</h2>

     <div class="Q">
       <p>こちらの内容で登録しても宜しいでしょうか？</p>
      </div>    
    <div class=main>
    

      <p>氏名：
    
       <?php echo $_POST['name'];?>
      </p>

      <p>メール：
        <?php echo $_POST['mail'];?>
      </p>

      <p>パスワード：
        <?php echo $_POST['password'];?>
      </p>

      <p>プロフィール写真：
        <?php echo $original_pic_name;?>
      </p>

      <p>コメント：
       <?php echo $_POST['comments'];?>
      </p>
    </div>

    <form action="register.php">
       <div class="toroku">
        <input type="submit" class="button1" value="戻って修正する">
       </div>
    </form>


    <form action="register_insert.php" method="post">
       
         <input type="submit" class="button2" value="登録する">
        
      <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
      <input type="hidden" value="<?php echo $path_filename;?>" name="path_filename">
      <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
    </form>

  </div>
  </main>

  <footer>
  © 2018 InterNous.inc.All rights reserved
  </footer>

</body>
</heml>