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

$id = $name  = $sp =  $mt =  $em =  $dc = $dv = $website = $id_parent = '';
if (!empty($_POST)) {
	if (isset($_POST['donvi'])) {
		$name = $_POST['donvi'];

	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];

	}
	if (isset($_POST['sophong'])) {
		$sp = $_POST['sophong'];
	}
	if (isset($_POST['maytruc'])) {
		$mt = $_POST['maytruc'];
	}
	if (isset($_POST['email'])) {
		$em = $_POST['email'];
	}
	if (isset($_POST['diachi'])) {
		$dc = $_POST['diachi'];
	}
	
	if (isset($_POST['donvicha'])) {
		$dv = $_POST['donvicha'];
	}
	if (isset($_POST['website'])) {
		$website = $_POST['website'];
	}
		

	if (!empty($name)) {
	  if ($id == '') {
		if ($dv == "NULL") {

			$sql = 'insert into donvi(name, sophong, maytruc, diachi, email, website ) values("'.$name.'","'.$sp.'", "'.$mt.'", "'.$dc.'", "'.$em.'", "'.$website.'")';
			
		}else{

		$sql = 'insert into donvi(name, sophong, maytruc, diachi, email, website ,id_parent) values("'.$name.'","'.$sp.'", "'.$mt.'", "'.$dc.'", "'.$em.'", "'.$website.'", "'.$dv.'" )';	
		}	}
		 else {
		 	if ($dv == "NULL") {
			$sql = 'update donvi set name = "'.$name.'", sophong = "'.$sp.'", maytruc = "'.$mt.'", diachi = "'.$dc.'", email = "'.$em.'", website = "'.$website.'", id_parent = '.$dv.' where id = '.$id;
		}else{
			$sql = 'update donvi set name = "'.$name.'", sophong = "'.$sp.'", maytruc = "'.$mt.'", diachi = "'.$dc.'", email = "'.$em.'", website = "'.$website.'", id_parent = "'.$dv.'" where id = '.$id;
		}
		}
		select($sql);
		// print($sql);
		// exit();
			header('Location: index.php');
			die();
		

		
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id']; 
	$sql      = 'select * from donvi where id = '.$id;
	$login = select_one($sql);
	if ($login != null) {
		$name 	  = $login['name'];
		$sp 	  = $login['sophong'];
		$mt 	  = $login['maytruc'];
		$em 	  = $login['email'];
		$dc 	  = $login['diachi'];
		$website  = $login['website'];
		if (isset($login['id_parent'])) {
			
		$id_parent = $login['id_parent'];
		$nm = "select name from donvi where id = " .$id_parent;
		$a = select_one($nm);
		if ( $a != null) {
			$dv = $a['name'];
		}
		}
		
		
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Th??m/S???a Th??ng Tin ????n V???</title>
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
	    <a class="nav-link"  href="../Donvi/">Qu???n L?? ????n V???</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link " href="../Danhba/">Qu???n L?? C??n B???</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Th??m/S???a Th??ng Tin ????n V???</h2>
			</div>
			<div class="panel-body" >
				<form method="post" style = "width: 50% ; margin-left : 20%;margin-top:3%;">
					<div class="form-group">
					  <label  for="taikhoan">T??n ????n V??? :</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">

					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="taikhoan" name="donvi" 
					  value="<?=$name?>" >

					</div>

					<div class="form-group">
					  <label  for="matkhau">S??? Ph??ng:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="sophong" value="<?=$sp?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">S??? m??y tr???c:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="maytruc" value="<?=$mt?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Email:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="email" value="<?=$em?>" >
					</div>

					<div class="form-group">
					  <label  for="matkhau">Website:</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="website" value="<?=$website?>" >
					</div>

					<div class="form-group">
					  <label  for="matkhau">?????a Ch???</label>
					  
					  <input style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="diachi" value="<?=$dc?>" >
					</div>
					
					<div class="form-group">
					  <label  for="matkhau">Tr???c Thu???c </label>
					  
					  <select style="text-align:center;font-size : 20px;"  type="text" class="form-control" id="matkhau" name="donvicha">
					  	
							<option value="<?=$id_parent?>"><?=$dv?></option>
							<option value="NULL"<?php if ($id_parent == "") {echo "selected"; } ?>>Kh??ng</option>

					<?php
					  		$sql = "select * from donvi " ;
					  		$variable = select_list($sql);
					  		foreach ($variable as  $value) { ?>
					  				
					  		<option value="<?=$value['id']?>"><?=$value['name']?></option>

					  	<?php } ?>

					  </select>
					</div>

					<button style="width: 50%; margin-left : 20%" class="btn btn-success">L??u</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>