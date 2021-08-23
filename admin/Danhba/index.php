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
	<title>Quản Lý Tài Khoản</title>
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
<style>
	td{
	font-weight : 400 ;font-size : 1.3rem	;}
	.search button{
    background-color: white;
    border: none;
}

.search button img{
    width: 50px;
    height: 45px;
   margin-top: 3px;
  
}
</style>
<body >
	<ul class="nav nav-tabs">
	  
	  <li class="nav-item">
	    <a class="nav-link" href="../Donvi/">Quản Lý Đơn Vị</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Quản Lý Cán Bộ</a>
	  </li>

	</ul>

	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center" style="color: #000;">Thông Tin Cán Bộ</h2>
			</div>
			<div class="panel-body">
				<div class="menu" style="display: flex; " >
			
				<a href="../../index.php">
					<button class="btn btn-warning" style="width: 200px ;margin-left: 50px  ; margin-bottom: 15px "> Trang Chủ </button>
				</a>
				<a href="add.php">
					<button class="btn btn-success" style="margin-left: 50px  ;margin-bottom: 15px;width: 200px;">Thêm Mới Cán Bộ</button>
				</a>
				<form action="">
				<select class="btn btn-primary"  name="id_donvi" value="<?=$dv?>" style="width: 200px;margin-left: 50px  ; margin-bottom: 15px ">
							<option value="" >Chọn Đơn Vị</option>
							<option value="" >Tất Cả</option>

					<?php 
					  		$sql = "select * from donvi " ;
					  		$variable = select_list($sql);
					  		foreach ($variable as  $value) { ?>
					  				
					  		<option value="<?=$value['id']?>"  <?php if( isset($_GET['id_donvi']) && $_GET['id_donvi'] ==$value['id']) echo "selected"?>   ><?=$value['name']?></option>

					  	<?php } ?>
					</select>
					<button style="width: 100px;margin-bottom: 15px;margin-left: 10px  ;" class="btn btn-info">Hiển Thị</button>
				
			</form>
				<a href="logout.php">
					<button class="btn btn-danger" style="width: 200px ;margin-left: 50px  ; margin-bottom: 15px "> Đăng Xuất </button>
				</a>


			<form class="form-inline" action="" method="get" style="margin-left: 50px  ; ">
              <div class="input-group w-100">
         <?php 
        	  $id = "";
						$wh = "";
        if (isset($_GET['searchText'])) {
           $searchText= $_GET['searchText'];
           $wh = " where name like '%".$searchText."%' ";
         }
           else{
             $searchText="";
             $wh = " where name like '%".$searchText."%'  ";

           }
            ?>

              <input class='form-control border-primary'  type='text' name='searchText' value='<?=$searchText?>' placeholder='Nhập tên cán bộ...'>

           
                <div  class="search" style="margin-top: -5px  ; ">
                  <button  type="submit"><img   src="../../images/search.png"></button>
                </div>
              </div>
            </form>


				</div>
				
				


				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px" class="text-warning">STT</th>
							<th class="text-warning">Tên </th>
							<th class="text-warning">Ảnh</th>
							<th class="text-warning">Chức Vụ</th>
							<th class="text-warning">Email</th>
							<th class="text-warning">SĐT</th>
							<th class="text-warning" >Đơn Vị</th>
							
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
<?php
//Lay danh sach tai khoan tu database

if (isset($_GET['id_donvi'])) {
	$id = $_GET['id_donvi'];
	if ($id =='') {
		$wh = 'where id_donvi' .$id;
	}else{
		$id = "=".$_GET['id_donvi'];
		$wh = 'where id_donvi' .$id;
	}
}



$sql          = 'select * from canbo '.$wh;

$listcanbo = select_list($sql);

$index = 1;
foreach ($listcanbo as $item) {

	$donvi = "select name from donvi where id = " .$item['id_donvi'];
	$val_donvi = select_one($donvi);
	if ($val_donvi != null) {
			$item_donvi = $val_donvi['name'];
	}

	echo '<tr>
				<td class="text-warning">'.($index++).'</td>
				<td >'.$item['name'].'</td>
				<td><img src='.$item["thumbnail"].' style="max-width: 100px"/></td>
				<td >'.$item['chucvu'].'</td>
				<td >'.$item['email'].'</td>
				<td >0'.$item['sdt'].'</td>

				<td >'.$item_donvi.'</td>				
				
				

				<td>
					<a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
				</td>
				<td>
					<button class="btn btn-danger" onclick="deleteCategory('.$item['id'].')">Xoá</button>
				</td>
			</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



	<script type="text/javascript">
		function deleteCategory(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('delete.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}


	</script>

	
</body>
</html>