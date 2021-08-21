<?php
	require_once ('../../db/dbhelper.php');
    session_start();
     $check = "select trangthai from user where taikhoan = '".$_SESSION['username']."'" ;

 	$check = select_one($check);
 	if ($check != null) {
 		$status = $check['trangthai'];
 	}
    if (!isset($_SESSION["username"]) || $status == 0 )
        {     header("Location:../../index.php");
            // header("Location:index.php");
        }

$id = $name  = $cv =  $cq =  $em =  $sdt = $bm =  $dv = $thumbnail = $id_dv = '';
if (!empty($_POST)) {
	if (isset($_POST['taikhoan'])) {
		$name = $_POST['taikhoan'];

	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];

	}
		if (isset($_POST['thumbnail'])) {
		$thumbnail = $_POST['thumbnail'];
		$thumbnail = str_replace('"', '\\"', $thumbnail);
	}

	if (isset($_POST['coquan'])) {
		$cq = $_POST['coquan'];
	}
	if (isset($_POST['chucvu'])) {
		$cv = $_POST['chucvu'];
	}
	if (isset($_POST['email'])) {
		$em = $_POST['email'];
	}
	if (isset($_POST['sdt'])) {
		$sdt = $_POST['sdt'];
	}
	
	if (isset($_POST['donvi'])) {
		$dv = $_POST['donvi'];
	}
		

	if (!empty($name)) {
		if ($id == '') {
			
		$sql = 'insert into canbo(name, thumbnail, coquan, chucvu, email, sdt ,id_donvi) values("'.$name.'","'.$thumbnail.'", "'.$cq.'", "'.$cv.'", "'.$em.'", "'.$sdt.'", "'.$dv.'" )';
				
			
		}
		 else {
		$sql = 'update canbo set name = "'.$name.'", thumbnail = "'.$thumbnail.'", coquan = "'.$cq.'", chucvu = "'.$cv.'", email = "'.$em.'", sdt = "'.$sdt.'", id_donvi = "'.$dv.'" where id = '.$id;}
			 select($sql);
			// print($sql);
			// exit();
			header('Location: index.php');
			die();
		

		
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id']; 
	$sql      = 'select * from canbo where id = '.$id;
	$login = select_one($sql);
	if ($login != null) {
		$name 	  = $login['name'];
		$cq 	  = $login['coquan'];
		$cv 	  = $login['chucvu'];
		$em 	  = $login['email'];
		$sdt 	  = $login['sdt'];
		$id_dv 	  = $login['id_donvi'];
		$thumbnail   = $login['thumbnail'];	

		$donvi = "select name from donvi where id = " .$id_dv;
		$val_donvi = select_one($donvi);
		if ($val_donvi != null) {
				$dv = $val_donvi['name'];
		}
		

	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Tài Khoản</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/ico" href="../icon/logo.ico">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body >
	<ul class="nav nav-tabs">
	  
	  <li class="nav-item">
	    <a class="nav-link"  href="../Donvi/">Quản Lý Đơn Vị</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link " href="../Danhba/">Quản Lý Danh Bạ</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Cập nhật thông tin cá nhân</h2>
			</div>
			<div class="panel-body" >
				<form method="post" style = "width: 50% ; margin-left : 20%;margin-top:3%;">
					<div class="form-group">
					  <label  for="taikhoan">Tên :</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">

					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="taikhoan" name="taikhoan" 
					  value="<?=$name?>" >

					</div>

					<div class="form-group">
					  <label  for="matkhau">Chức Vụ:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="chucvu" value="<?=$cv?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Điện THoại Cơ Quan:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="coquan" value="<?=$cq?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Email:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="email" value="<?=$em?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Số điện thoại</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="sdt" value="<?=$sdt?>" >
					</div>
					
					<div class="form-group">
					  <label  for="matkhau">Đơn Vị</label>
					  
					  <select style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="donvi" value="<?=$dv?>" >

					  	<option value="<?=$id_dv?>"><?=$dv?></option>
					  	<?php 

					  		$sql = "select * from donvi " ;
					  		$variable = select_list($sql);
					  		foreach ($variable as  $value) { ?>
					  				
					  		<option value="<?=$value['id']?>"><?=$value['name']?></option>

					  	<?php } ?>

					  </select>
					</div>

					<div class="form-group">
					  <label for="thumbnail">Ảnh:</label>
					  
					  <input  placeholder="" type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?=$thumbnail?>" onchange="updateThumbnail()">
					  <img src="<?=$thumbnail?>" style="max-width: 200px;margin-left: 30%" id="img_thumbnail">
					</div>
			
					<button style="width: 50%; margin-left : 20%" class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>