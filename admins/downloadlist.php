<?php session_start();?>
<?php
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
            <a class="navbar-brand" href="index.php">
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
				<li class="breadcrumb-item active">จัดการข้อมูลดาวน์โหลด</li>
			</ol>
		</div>
		<!-- Our Customers -->
		<div class="customers-box">
			<h2>ข้อมูลดาวน์โหลด</h2>
			<div class="row">
				<!-- Blog Entries Column -->
				<div class="col-md-8 blog-entries">
				  <!-- Blog Post -->
				  <div class="card mb-4">
						<?php
	 						include "../config/connect.php";
	 						$strSQL = "SELECT * FROM download_data";
	 						$objQuery = mysqli_query($conn,$strSQL) or die(mysqli_error());
	 				  ?>
						<table class="table table-responsive-sm">
							<thead>
								<tr>
									<th>ลำดับ</th>
									<th>ดาวน์โหลด</th>									
									<th>ข้อมูลเมื่อวันที่</th>
									<th>จัดการข้อมูล</th>
								</tr>
							</thead>
							<tbody>
								<?php $count_num=1;
								while ($row = mysqli_fetch_array($objQuery)) { ?>
								<tr>
									<td><?php echo $count_num++; ?></td>
									<td><a href="DFiles/<?php echo $row["D_FILES"]; ?>"><?php echo $row["D_NAME"]; ?></i></a></td>
									<td><?php echo date('d-M-Y',strtotime($row["D_UPDATE"])); ?></td>
									<td><a href="delete_download.php?idd=<?php echo $row["D_ID"]; ?>" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><i class="fa fa-trash"></i></a></td>
								</tr>
							<?php	} ?>
							</tbody>
						</table>
				  </div>
				</div>
				<!-- Sidebar Widgets Column -->
				<div class="col-md-4 blog-right-side">
				  <!-- Search Widget -->
					<form role="form"  method="post" action="insert_download.php"  id="form_as" enctype="multipart/form-data">
				  <div class="card mb-4">
					<h5 class="card-header">เพิ่มข้อมูล</h5>
						<div class="card-body">
							<label>ชื่อข้อมูล:</label>
							<input type="text" class="form-control" id="DName" name="DName" required>
							<label>ไฟล์แนบ:</label>
							<input type="file" name="filUpload_d"><br><br>
							<input type="hidden" name="hdnOldFile_d" value="">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary" id="btnAddD">เพิ่ม</button>
							</span>
						</div>
				</div>
			</form>
			</div>
			<!-- /.row -->
		</div>
    </div>
    <!-- /.container -->
		<!--footer starts from here-->
		<?php include ("footeradmins.php"); ?>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>
