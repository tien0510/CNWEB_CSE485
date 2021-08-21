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
  

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bài Đăng</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/ico" href="../icon/logo.ico">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body >
	<ul class="nav nav-tabs">

	  <li class="nav-item">
	    <a class="nav-link active" href="#">Quản Lý Đơn Vị</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link " href="../Danhba/index.php">Quản Lý Danh Bạ</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Danh Sách Đơn Vị</h2>
			
			</div>
			<div class="panel-body">
				
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Tên Cơ Quan, Đơn Vị</th>

						</tr>
					</thead>
					<tbody>
<?php


 $sql= "select * from donvi where id = id_child ";

$postList = select_list($sql);
$index = 1 ;
foreach ($postList as $item) {


 ?>

	<tr>
				<td><?=($index++)?></td>
				<td ><?=$item['name']?></td>
				
				<td>
				<a href="Detail.php?id=<?=$item['id']?>">
				<button class="btn btn-success">Xem chi tiết</button></a>
				</td>
				
			</tr>

<?php }?>

</tbody>
				</table>

			</div>
		</div>
	</div>

</body>

</html>