<?php 
session_start();

?>
 <!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>

  <form class="modal-content animate" action="login_submit.php" method="post">
    <div class="imgcontainer">

     <!--  <img src="../image/login.png" alt="Avatar" class="avatar"> -->
    </div>

    <div class="container">
      <label for="taikhoan"><b>Username</b></label>
      
      <input type="text" placeholder="Enter Username" name="taikhoan" required>

      <label for="matkhau"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="matkhau" required>
        
      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="../index.php" style="text-decoration: none ; color: black;" title="">
      <span  class="cancelbtn">Cancel</span> </a>

      <span class="psw">Bạn Chưa Có Tài Khoản? <a class="regist"  href="../register/register.php"> Đăng Kí Ngay </a></span>
    </div>
  </form>
</div>


</body>
</html>


