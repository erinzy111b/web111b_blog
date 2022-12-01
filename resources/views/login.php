<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  body {
    text-align: center;
  }

  div.welcome {
    color: green;
  }

  div.error {
    color: red;
  }
  </style>




</head>

<body>






</body>

</html>

<?php

$userpass = array("admin" => "12345", "woof" => "98798");

$count = count($userpass);

if (!$_POST['uname'] || !$_POST['upass']) {
    echo "<div class='error'>請輸入帳號密碼！</div>";
} else {
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $count = 1;
    foreach ($userpass as $key => $value) {
        if ($key == $username) {
            break;
        } else {
            if ($count == count($userpass)) {
                echo "無此人";
                exit;
            }
            $count++;
        }
    }

    if ($userpass[$username] == $password) {
        echo "<div class='welcome'>$username 會員你好！ <br> 你有新留言 </div>";
    } else {
        echo "<div class='error'>帳號密碼不相符！</div>";
    }
}

//邏輯還沒通就看仔細一點

?>
