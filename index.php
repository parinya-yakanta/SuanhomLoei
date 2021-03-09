<!DOCTYPE html>
<?php session_start();?>
<?php include ("config/connect.php"); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>ระบบฐานข้อมูลด้านความหลากหลายของพืชสมุนไพรในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="index.php">หน้าหลัก</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="meddoc.php">หมอยาหนองหิน</a>
                  </li>
									<li class="nav-item">
                     <a class="nav-link" href="kmdata.php">คลังภูมิปัญญาท้องถิ่น</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="download.php">ดาวน์โหลดข้อมูล</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="aboutus.php">เกี่ยวกับโครงการวิจัย</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							 <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>ระบบฐานข้อมูลด้านความหลากหลายของพืชสมุนไพร</h3>
                     <p>ในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
										<h3>โครงการวิจัยการพัฒนาระบบฐานข้อมูล</h3>
										<p>ด้านความหลากหลายของพืชสมุนไพรในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</p>
                  </div>
               </div>
							 <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
										<h3>ระบบฐานข้อมูลด้านความหลากหลายของพืชสมุนไพร</h3>
										<p>ในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</p>
                  </div>
               </div>
               <!-- Slide Four - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-04.jpg')">
                  <div class="carousel-caption d-none d-md-block">
										<h3>โครงการวิจัยการพัฒนาระบบฐานข้อมูล</h3>
										<p>ด้านความหลากหลายของพืชสมุนไพรในบ้านสวนห้อม ต.ปวนพุ อ.หนองหิน จ.เลย</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>

		<div class="container">
			<!-- Search Widget -->
			<div class="contact-left">
				<p class="help-block"></p>
				<form role="form" id="formSerch" name="formSerch" method="GET" action="index.php">
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
							<?php
							 include "config/connect.php";
							 $perpage = 9;
						 if (isset($_GET['page'])) {
							 $page = $_GET['page'];
						 } else {
								$page = 1;
						 }
						 $start = ($page - 1) * $perpage;
						 error_reporting(~E_NOTICE);
						 if($_GET['txt_search'])
						 {
					 $p_search = $_GET['txt_search'];
					 $sql = "SELECT * FROM herb_data WHERE H_LNAME LIKE '%$p_search%' or H_GNAME LIKE '%$p_search%' or H_SNAME LIKE '%$p_search%'
																					 or H_PROP LIKE '%$p_search%' or H_FOOD LIKE '%$p_search%' or H_BEAUTY LIKE '%$p_search%' or H_BELIEF LIKE '%$p_search%'
																					 or H_ORNAMENTAL LIKE '%$p_search%' or H_PROPAGATION LIKE '%$p_search%' or H_SOURCE LIKE '%$p_search%' or H_TREATMETHOD LIKE '%$p_search%'
																					 or H_TREATUSED LIKE '%$p_search%'
																					 ORDER BY H_ID ASC limit {$start} , {$perpage}";
				 } else
				 {
						 $sql = "select * FROM herb_data limit {$start} , {$perpage} ";
				 }
				 $result = mysqli_query($conn,$sql);
				 while ($row = mysqli_fetch_array($result)) {
				 ?>
				 <div class="col-lg-4 mb-4">
						<div class="card h-100">
							 <h4 class="card-header"><?php echo $row['H_LNAME'];?></h4>
							 <div class="card-img">
									<img class="img-fluid" src="admins/HerbImg/<?php echo $row['H_IMG'];?>" width="480" height="380" />
							 </div>
							 <div class="card-body">
									<p class="card-text"><?php echo $row['H_GNAME'];?></p>
							 </div>
							 <div class="card-footer">
									<a href="herbdetail.php?idh=<?php echo $row[0]; ?>" class="btn btn-primary">เพิ่มเติม</a>
							 </div>
						</div>
				 </div>
		 <?php }
							mysqli_close($conn);
				 ?>
			</div>
    <!-- /.container -->
		</div>
		</div>
		<?php
		include "config/connect.php";
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
		<div class="pagination_bar">
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="index.php?page=1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>

				<?php for($i=1;$i<=$total_page;$i++){ ?>

				<li class="page-item">
					<a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
				</li>

			  <?php } ?>

				<li class="page-item">
				  <a class="page-link" href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
		</div>
    <!--footer starts from here-->
		<?php include ("footer.php"); ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
