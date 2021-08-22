<?php
require_once ('db/dbhelper.php');	

  
if (isset($_GET['id'])) {
	$id      = $_GET['id'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CHi TIết</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	         <link rel="stylesheet" type="text/css" href="add.css">
	<link rel="shortcut icon" type="image/ico" href="../icon/logo.ico">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- summernote -->
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body  >
	
	
	<?php require_once('header.php') ?>
	<div class="view" style=" animation :  trenxuong 1s ease-out;">
		<img class="d-block w-100" src="http://www.tlu.edu.vn/Portals/0/images/2021/bia.jpg">

	</div>
				
			<table class="table table-bordered table-hover">
					
				<tbody>
<?php
$sql          = 'select * from donvi where id =' .$id;
$loginList = select_list($sql);

$index = 1;
foreach ($loginList as $item) {?>
<h2 class="text-center">Thông tin liên hệ : <?=$item['name']?></h2><?php
	echo '<tr>
				<td class="text-warning">Máy trực</td>
				<td >0'.$item['maytruc'].'</td>
				<td class="text-warning">Địa chỉ</td>
				<td >'.$item['diachi'].'</td>
				<td class="text-warning">Email</td>
				<td >'.$item['email'].'</td>
				<td class="text-warning">Website</td>
				<td >'.$item['website'].'</td>
				<td ></td>

			</tr>';
}
?>




					</tbody>
			</table>





<h2 class="text-center">Văn phòng khoa :<?=$item['sophong']?></h2>
<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px" class="text-warning">STT</th>
							<th class="text-warning">Tên </th>
							<th class="text-warning"> Chức vụ</th>
							<th class="text-warning"> Điện thoại cơ quan</th>
							<th class="text-warning"> Email</th>
							<th class="text-warning">Số điện thoại</th>	
						</tr>
					</thead>
					<tbody>
<?php
//Lay danh sach tai khoan tu database
$sql          = 'select * from canbo where id_donvi = ' .$id;
$loginList = select_list($sql);

$index = 1;
foreach ($loginList as $item) {

	echo '<tr>
				<td class="text-warning">'.($index++).'</td>
				<td >'.$item['name'].'</td>
				<td >'.$item['chucvu'].'</td>
				<td >'.$item['coquan'].'</td>
				<td >'.$item['email'].'</td>
				<td >0'.$item['sdt'].'</td>

				
			</tr>';
}
?>
					</tbody>
</table>



<?php 
$sqlid        = 'select * from donvi where id_child = ' .$id;
$listitem 		= select_list($sqlid);
$index = 1;





foreach ($listitem as $list) { 
	$idcb  = $list['id']; // lấy id cán bộ của đơn vị đang xét
	?>



	
<h2 class="">  <?=$list['name']?> : <?=$list['sophong']?></h2>
<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px" class="text-success">STT</th>
							<th class="text-success">Tên </th>
							<th class="text-success"> Chức vụ</th>
							<th class="text-success"> Điện thoại cơ quan</th>
							<th class="text-success"> Email</th>
							<th class="text-success">Số điện thoại</th>	
						</tr>
					</thead>
					<tbody>
<?php
$sql          = 'select * from canbo where id_donvi = ' .$idcb;
$loginList = select_list($sql);
$index = 1;
foreach ($loginList as $item) {

	echo '<tr>
				<td class="text-primary">'.($index++).'</td>
				<td >'.$item['name'].'</td>
				<td >'.$item['chucvu'].'</td>
				<td >'.$item['coquan'].'</td>
				<td >'.$item['email'].'</td>
				<td >0'.$item['sdt'].'</td>

				
			</tr>';
}
?>
					</tbody>
				</table>
<?php }?>







<?php require_once('footer.php') ?>
</body>
</html>