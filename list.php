<?php 

  session_start();
  require_once('db/dbhelper.php');
  $wh = ""; 
 ?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cơ Quan Phòng Ban-TLU</title>
  <link rel="shortcut icon" type="image/ico" href="icon/logo.ico">
		<link rel="stylesheet" type="text/css" href="css/directory.css">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<?php 
	
	require_once('header.php')

 ?>

<div class="view" style=" animation :  trenxuong 1s ease-out;">
		<img class="d-block w-100" src="http://www.tlu.edu.vn/Portals/0/images/2021/bia.jpg">

</div>
    
<section class="wrap-icon-modal">
          <div class="container mt-0 mt-md-5">
            <div class="row mb-3 mb-sm-2">
              <div class="col-12">
                <h2 class="h3 text-danger text-capitalize font-weight-bold mb-4">Danh Sách Đơn Vị,Phòng Ban Lớn</h2>
                <div class="mb-4"></div>
              </div>
            </div>
          </div>
</section>

<section class="search-wrap pb-5">
          <div class="container pb-5">
           <form class="form-inline" action="" method="get">
              <div class="input-group w-100">
         <?php 
        if (isset($_GET['searchText'])) {
           $searchText= $_GET['searchText'];
           $wh = " and name like '%".$searchText."%' ";
         }
           else{
             $searchText="";
             $wh = " and name like '%".$searchText."%'  ";

           }
            ?>

              <input class='form-control border-primary'  type='text' name='searchText' value='<?=$searchText?>' placeholder='Enter a Name, Academic Program, or College to search for students, staff, faculty, and others affiliated with VinUni'>

           
                <div  class="search" >
                  <button  type="submit"><img  src="images/search.png"></button>
                </div>
              </div>
            </form>
          </div>
</section>





  <div class="container">
      <div class="panel-body">
        
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="50px">STT</th>
              <th>Tên đơn vị, phòng ban lớn</th>

            </tr>
          </thead>
          <tbody>
<?php


 $sql= "select * from donvi where id_child is NULL ".$wh ;

$postList = select_list($sql);
$index = 1 ;
foreach ($postList as $item) {


 ?>

  <tr>
        <td><?=($index++)?></td>
        <td width="70%"><?=$item['name']?></td>
        
        <td>
        <a href="Detail.php?id=<?=$item['id']?>">
        <button class="btn btn-success">Xem thông tin phòng ban</button></a>
        </td>
   
      </tr>

<?php }?>

</tbody>
        </table>

            </div>
          </div>







<?php
	
	require_once('footer.php');
	
 ?>

</body>
</html>

