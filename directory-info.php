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
<link rel="stylesheet" href="css/directory-info.css">
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
				

<div class="intro">
    <?php 

      $sql =  " select * from canbo where id =".$_GET['id']." ";

      $directory =  select_one($sql) ;
      if($directory != null) {
        
      $name = $directory['name'];
      $thumbnail = $directory['thumbnail'];
      $cv = $directory['chucvu'];
      
      $em = $directory['email'];
      $sdt = $directory['sdt'];
      $dtcq = $directory['coquan'];
	  $iddv = $directory['id_donvi'];

	  $sqldv = "select name from donvi where id = " .$iddv;
	  $iddv = select_one($sqldv) ;
	  if ($iddv!= null) {
	  		$dv = $iddv['name'];
	  }


      }  ?>

  
      <div class="container-fliud" style="padding : 7%">

        <div class="wrapper row">
          <div class="preview col-md-6">
              <div class="tab-pane active" id="pic-1"><img style=" margin-top : 20px;" alt="Hình ảnh" src="<?=$thumbnail?>">

              </div>
            </div>

          <div class="details col-md-6">
            <h1 class="name text text-primary">Họ và tên: <?=$name?></h1>
            <div class="details col-md-12" style="padding: 12%; ">
            <h3 class="sizes" style="margin: 50px auto"><i style="color : #cd3c3f">Chức Vụ : </i><?=$cv?></h3>
            <h3 class="sizes"style="margin: 50px auto"><i style="color : #cd3c3f">Đơn Vị  : </i><?=$dv?></h3>
            <h3 class="sizes"style="margin: 50px auto"><i style="color : #cd3c3f">Email   : </i><?=$em?></h3>
            <h3 class="sizes"style="margin: 50px auto"><i style="color : #cd3c3f">Số DT   : </i>0<?=$sdt?></h3>
            <h3 class="sizes"style="margin: 50px auto"><i style="color : #cd3c3f">ĐT Cơ Quan :</i><?=$dtcq?></h3>
        </div>
          </div>
        </div>
	 </div>
</div>



<?php require_once('footer.php') ?>
</body>
</html>