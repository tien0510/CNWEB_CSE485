<?php
	require_once ('../db/dbhelper.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">  
	     <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="register.css">



</head>
<body>
      <div class="action">
              <a href="../Login/login.php" title='Quay Trở lại Đăng Nhập'><button name="datphong" class=" btn btn-success" style= type="button"><i>Đăng Nhập Ngay</i></button>
              
</a>
            </div>
<form action="register_submit.php" method="POST" style="max-width:500px;margin:auto">
  <h2> Đăng Kí Tài Khoản</h2>
  	<b>Username </b>

  <div class="input-container">
<!--     <i class="fa fa-user "></i> -->
    <input class="input-field" type="text" placeholder="Username" name="taikhoan">
  </div>

    	<b>Password</b>

  <div class="input-container">
<!--     <i class="fa fa-key "></i> -->
    <input class="input-field" type="password" placeholder="Password" name="matkhau">
  </div>

    	<b>Re-Password</b>

  <div class="input-container">
<!--     <i class="fa fa-key "></i> -->
    <input class="input-field" type="password" placeholder="Password" name="re-matkhau">
  </div>

  <button type="submit" name="submit" class="btn">Register</button>
</form>

</body>
</html>
  
