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
            <a class="navbar-brand" href="index.html">
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
    <!-- Page Content -->
    <div class="container">
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">หน้าหลัก</a>
					</li>
					<li class="breadcrumb-item active">ข้อมูลสมุนไพร</li>
				</ol>
			</div>
        <!-- Detail Section -->
				<?php
					$sql = "SELECT * FROM herb_data WHERE H_ID = '".$_GET["idh"]."' ";
					$result = mysqli_query($conn, $sql) or die ("Error Query [".$sql."]");
					$row = mysqli_fetch_array($result);
				?>
				<div class="row">
					<div class="col-lg-6 portfolio-item">
						<div class="">
							<div class="card-body">
								<h4 class="card-title">
									<h2><?php echo $row["H_LNAME"];?></h2>
                  <p>ชื่อสามัญ :<?php echo $row["H_GNAME"];?></p>
									<p>ชื่อวิทยาศาสตร์ :<?php echo $row["H_SNAME"];?></p>
									<h5>การขยายพันธุ์</h5>
									<p><?php echo $row["H_PROPAGATION"];?></p>
									<h5>แหล่งที่มา</h5>
									<p><?php echo $row["H_SOURCE"];?></p>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 portfolio-item">
						<div>
							<a href="#"><img class="card-img-top" src="admins/HerbImg/<?php echo $row["H_IMG"];?>" alt="" /></a>
						</div>
					</div>
					<div class="col-lg-6 portfolio-item">
						<div>
							<div class="card-body">
								<h4 class="card-title">
									<h5>การใช้ประโยชน์</h5>
									<ul>
                     <li>สรรพคุณ</li>
										 <p><?php echo $row["H_PROP"];?></p>
                     <li>อาหาร</li>
										 <p><?php echo $row["H_FOOD"];?></p>
                     <li>ความงาม</li>
										 <p><?php echo $row["H_BEAUTY"];?></p>
                     <li>พืชมงคล/ความเชื่อ</li>
										 <p><?php echo $row["H_BELIEF"];?></p>
                     <li>ไม้ประดับ</li>
										 <p><?php echo $row["H_ORNAMENTAL"];?></p>
                  </ul>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 portfolio-item">
						<div>
							<div class="card-body">
								<h4 class="card-title">
									<h5>วิธีรักษา</h5>
                  <p><?php echo $row["H_TREATMETHOD"];?></p>
									<h5>ส่วนที่ใช้ในการรักษา</h5>
									<p><?php echo $row["H_TREATUSED"];?></p>
								</h4>
							</div>
						</div>
					</div>
				<!-- /.row -->
    </div>
		<!-- Map Column -->
		<h5>ตำแหน่งที่พบ</h5>
		<div>
			<!-- Embedded Google Map -->
			<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $row["H_LOCATION"];?>"></iframe>
		</div>
    <!-- /.container -->


    <!--footer starts from here-->
		<?php include ("footer.php"); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
