<?php session_start();?>
<?php
include ("../config/connect.php");
if (!$_SESSION["UserID"]){
	Header("Location: ../index.php");
}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>ระบบฐานข้อมูลด้านความหลากหลายของพืชสมุนไพรในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</title>
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="adminindex.php">
            <img src="../images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="adminindex.php">หน้าหลัก</a>
                  </li>
									<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     จัดการข้อมูล
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
											  <a class="dropdown-item" href="herblist.php">สมุนไพร</a>
                        <a class="dropdown-item" href="meddoclist.php">หมอยาหนองหิน</a>
                        <a class="dropdown-item" href="kmdatalist.php">คลังภูมิปัญญาท้องถิ่น</a>
                        <a class="dropdown-item" href="downloadlist.php">ดาวน์โหลด</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="profileedit.php">จัดการโปรไฟล์</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
		<!-- Page Content -->
    <div class="container">
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="adminindex.php">หน้าหลัก</a>
					</li>
					<li class="breadcrumb-item active">จัดการข้อมูลสมุนไพร</li>
				</ol>
			</div>

		<div class="container">
			<!-- Search Widget -->
			<div class="contact-left">
				<p class="help-block"></p>
				<form role="form" id="formSerch" name="formSerch" method="GET" action="herblist.php?uid=<?php echo $UID;?>">
					<div class="control-group form-group">
						<div class="input-group">
						<input name="txt_search" type="text" class="form-control" placeholder="ค้นหาข้อมูลสมุนไพรได้ที่นี่" value="<?php error_reporting(~E_NOTICE); echo $_GET['txt_search']?>">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit" id="searchButton">ค้นหา</button>
						</span>
					</div>
				</form>
<hr>
		<!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">ข้อมูลสมุนไพร</h1>
            <!-- Services Section -->
            <div class="row">
							<div class="col-lg-4 mb-4">
								 <div class="card h-100">
										<h4 class="card-header">เพิ่มสมุนไพร</h4>
										<div class="card-img">
											 <img class="img-fluid" src="../images/herbadd-img.jpg" alt="" />
										</div>
										<div class="card-body">
											 <p class="card-text"></p>
										</div>
										<div class="card-footer">
											 <a href="herbadd.php" class="btn btn-primary">เพิ่ม</a>
										</div>
								 </div>
							</div>
							<!-- ดึงข้อมูลจาก Database -->
							<?php
								include "../config/connect.php";
								$perpage = 8;
								if (isset($_GET['page'])){
									$page = $_GET['page'];
								} else {
									 $page = 1;
								}
								$start = ($page - 1) * $perpage;
								error_reporting(~E_NOTICE);
								if($_GET['txt_search']){
									$p_search = $_GET['txt_search'];
									$sql = "SELECT * FROM herb_data WHERE H_LNAME LIKE '%$p_search%' or H_GNAME LIKE '%$p_search%' or H_SNAME LIKE '%$p_search%'
																									or H_PROP LIKE '%$p_search%' or H_FOOD LIKE '%$p_search%' or H_BEAUTY LIKE '%$p_search%' or H_BELIEF LIKE '%$p_search%'
																									or H_ORNAMENTAL LIKE '%$p_search%' or H_PROPAGATION LIKE '%$p_search%' or H_SOURCE LIKE '%$p_search%' or H_TREATMETHOD LIKE '%$p_search%'
																									or H_TREATUSED LIKE '%$p_search%'
																									ORDER BY H_ID ASC limit {$start} , {$perpage}";
								}else{
									$sql = "select * from herb_data limit {$start} , {$perpage}";
								}
									$result = mysqli_query($conn,$sql);
									while ($row = mysqli_fetch_array($result)){
									?>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header"><?php echo $row['H_LNAME'];?></h4>
                     <div class="card-img">
											  <img class="img-fluid" src="HerbImg/<?php echo $row['H_IMG'];?>" />
                     </div>
                     <div class="card-body">
                        <p class="card-text"><?php echo $row['H_GNAME'];?></p>
                     </div>
                     <div class="card-footer">
                        <a href="herbedit.php?idh=<?php echo $row[0]; ?>" class="btn btn-primary">แก้ไข</a>
                     </div>
                  </div>
               </div>
						 <?php }
						 			mysqli_close($conn);
						 ?>
            </div>
            <!-- /.row -->

        </div>
    <!-- /.container -->
		<div class="pagination_bar">
			<?php
			include "../config/connect.php";
			error_reporting(~E_NOTICE);
			if($_GET['txt_search'])
	    {
				$p_search = $_GET['txt_search'];
				$sql2 = "SELECT * FROM herb_data WHERE H_LNAME LIKE '%$p_search%' or H_GNAME LIKE '%$p_search%' or H_SNAME LIKE '%$p_search%'
																				or H_PROP LIKE '%$p_search%' or H_FOOD LIKE '%$p_search%' or H_BEAUTY LIKE '%$p_search%' or H_BELIEF LIKE '%$p_search%'
																				or H_ORNAMENTAL LIKE '%$p_search%' or H_PROPAGATION LIKE '%$p_search%' or H_SOURCE LIKE '%$p_search%' or H_TREATMETHOD LIKE '%$p_search%'
																				or H_TREATUSED LIKE '%$p_search%'
																				ORDER BY H_ID ASC";
			}else{
				$sql2 = "select * from herb_data ";
			}
	 		$query2 = mysqli_query($conn, $sql2);
	 		$total_record = mysqli_num_rows($query2);
	 		$total_page = ceil($total_record / $perpage);
	 		?>
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="herblist.php?page=1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<?php for($i=1;$i<=$total_page;$i++){ ?>
				<li class="page-item">
				  <a class="page-link" href="herblist.php?page=<?php echo $i; ?>"><?php echo $i;?></a>
				</li>
			  <?php } ?>
				<li class="page-item">
				  <a class="page-link" href="herblist.php?page=<?php echo $total_page;?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
		</div>
    <!--footer starts from here-->
		<?php include ("footeradmins.php"); ?>
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }?>
