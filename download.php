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
										<a class="nav-link" href="meddoc.php">หมอยาหนองหิน</a>
								 </li>
								 <li class="nav-item">
										<a class="nav-link" href="kmdata.php">คลังภูมิปัญญาท้องถิ่น</a>
								 </li>
								 <li class="nav-item">
										<a class="nav-link active" href="download.php">ดาวน์โหลดข้อมูล</a>
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
				<li class="breadcrumb-item active">ดาวน์โหลดข้อมูล</li>
			</ol>
		</div>

		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="images/services-big-00.png" alt="" />
		<!-- Our Customers -->
		<div class="customers-box">
			<h2>ข้อมูลดาวน์โหลด</h2>
			<div class="row">
				<!-- Blog Entries Column -->
				<div class="col-md blog-entries">
				  <!-- Blog Post -->
				  <div class="card mb-4">
						<?php
	 						$strSQL = "SELECT * FROM download_data";
	 						$objQuery = mysqli_query($conn,$strSQL) or die(mysqli_error());
	 				  ?>
						<table class="table table-responsive-sm">
							<thead>
								<tr>
									<th>ลำดับ</th>
									<th>ดาวน์โหลด</th>
									<th>ไฟล์</th>
									<th>ข้อมูลเมื่อวันที่</th>
								</tr>
							</thead>
							<tbody>
								<?php $count_num=1;
								while ($row = mysqli_fetch_array($objQuery)) { ?>
								<tr>
									<td><?php echo $count_num++; ?></td>
									<td><?php echo $row["D_NAME"]; ?></td>
									<td><a href="admins/DFiles/<?php echo $row["D_FILES"]; ?>"><?php echo $row["D_FILES"]; ?></i></a></td>
									<td><?php echo date('d-M-Y',strtotime($row["D_UPDATE"])); ?></td>
								</tr>
							<?php	} ?>
							</tbody>
						</table>
				  </div>
				</div>
				<!-- Sidebar Widgets Column -->
			<!-- /.row -->
		</div>
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
