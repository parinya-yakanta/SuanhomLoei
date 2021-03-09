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
									 <a class="nav-link" href="index.php">หน้าหลัก</a>
								</li>
								<li class="nav-item">
									 <a class="nav-link" href="meddoc.php">หมอยาหนองหิน</a>
								</li>
								<li class="nav-item">
									 <a class="nav-link active" href="kmdata.php">คลังภูมิปัญญาท้องถิ่น</a>
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
				<li class="breadcrumb-item active">หัวข้อคลังภูมิปัญญาท้องถิ่น</li>
			</ol>
		</div>
		<?php
			$sql = "SELECT * FROM km_base WHERE KM_ID = '".$_GET["idkm"]."' ";
			$result = mysqli_query($conn, $sql) or die ("Error Query [".$sql."]");
			$row = mysqli_fetch_array($result);
		?>
		<!-- Portfolio Item Row -->
		<div class="row">
			<div class="col-md-8">
				<img class="img-fluid" src="admins/KmImg/<?php echo $row["KM_IMG"];?>" width="700" height="300" alt="" />
			</div>
			<div class="col-md-4">
					<h3 class="my-3"><?php echo $row["KM_TOPIC"];?></h3>
					<p><?php echo $row["KM_ABS"];?></p>
			</div>
		</div>
		<!-- /.row -->
		<div class="related-projects">
			<!-- Related Projects Row -->
			<p><?php echo $row["KM_DATA"];?></p>
			<p>ข้อมูลเมื่อวันที่ : <?php echo date('d-M-Y',strtotime($row["KM_UPDATE"])); ?></p>
			<p>แหล่งที่มา : <?php echo $row["KM_REF"];?></p>
			</div>


    </div>
    <!-- /.container -->

		<!--footer starts from here-->
		<?php include ("footer.php"); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
