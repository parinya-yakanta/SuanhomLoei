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
									<a class="nav-link" href="index.php">หน้าหลัก</a>
							 </li>
							 <li class="nav-item">
									<a class="nav-link active" href="meddoc.php">หมอยาหนองหิน</a>
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
				<li class="breadcrumb-item active">หมอยาหนองหิน</li>
			</ol>
		</div>
		<!-- About Content -->
		<div class="about-main">
			<?php
				$strSQL = "SELECT * FROM medicine_doc";
				$objQuery = mysqli_query($conn,$strSQL) or die(mysqli_error());
				while ($row = mysqli_fetch_array($objQuery)) {
			?>
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid rounded mb-4" src="admins/MedImg/<?php echo $row["MED_IMG"];?>" alt="" width="700" height="450"/>
				</div>
				<div class="col-lg-6">
					<h2><?php echo $row["MED_FNAME"];?></h2>
					<p><?php echo $row["MED_SKILL"];?></p>
					<p><?php echo $row["MED_DATA"];?></p>
					<p><i class="fa fa-location-arrow"></i> <?php echo $row["MED_ADDR"];?> </p>
					<p><i class="fa fa-phone"></i> <?php echo $row["MED_TEL"];?> </p>
				</div>
			</div>
			<hr>
			<?php	} ?>
			<!-- /.row -->
		</div>

		<!-- /.container -->
	</div>

	<!--footer starts from here-->
	<?php include ("footer.php"); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
