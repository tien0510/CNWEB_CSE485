<?php
	require_once ('../db/dbhelper.php');
	session_start();
	if (isset($_POST['submit']) && $_POST["taikhoan"] != '' && $_POST["matkhau"] != '' && $_POST["re-matkhau"] != '') 
	{
		$usrnm      = $_POST["taikhoan"];
		$password   = $_POST["matkhau"];
		$repassword = $_POST["re-matkhau"];

			if( $password != $repassword  ){			
				echo "<script>
					      alert('Mật khẩu không trùng khớp');
							window.location='http://localhost/cnweb/register/register.php';
					      </script>";
				}


					$sql      = "select * from user where taikhoan = '$usrnm'";
					$old      = mysqli_query($con, $sql);
		

				if( mysqli_num_rows($old) > 0){
					// header("location:register.php");
					echo "<script>
					      alert('tài khoản hiện đã được sử dụng rồi');
						  window.location='http://localhost/cnweb/register/register.php';
					      </script>";

				}

				else if($password === $repassword){
					$sql="insert into user(taikhoan,matkhau) values('$usrnm',$password)";
					select($sql);
					echo "<script>
					      alert('Đăng kí tài khoản thành công !!!!!');
						  window.location='http://localhost/cnweb/login/login.php';
					      </script>";

					}
	}
	else
		{

	header("location:register.php");
		}

?>