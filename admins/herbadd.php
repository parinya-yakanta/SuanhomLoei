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
            <a class="navbar-brand" href="adminindex.html">
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
											 <a class="dropdown-item" href="kmdataelist.php">คลังภูมิปัญญาท้องถิ่น</a>
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
					<li class="breadcrumb-item active">ข้อมูลสมุนไพร</li>
				</ol>
			</div>
        <!-- Detail Section -->
				<form role="form"  method="post" action="insert_herb.php"  id="form_as" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6 portfolio-item">
								<div class="card-body">
									<div class="control-group form-group">
			              <div class="controls">
											<h5>ชื่อท้องถิ่น:</h5>
			                <input type="text" class="form-control" id="H_LNAME" name="H_LNAME" value="" required >
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>ชื่อสามัญ:</h5>
			                <input type="text" class="form-control" id="H_GNAME" name="H_GNAME" value="" required >
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>ชื่อวิทยาศาสตร์:</h5>
			                <input type="text" class="form-control" id="H_SNAME" name="H_SNAME" value="" required >
			              </div>
			            </div>
								</div>
						</div>
						<div class="col-lg-6 portfolio-item">
							<div>
								<img class="img-fluid rounded mb-4" id="blah4" src="../images/addmed-img.jpg" alt="" />
								<input type="file" name="filUpload_d"><br>
								<input type="hidden" name="hdnOldFile_d" value="">
							</div>
						</div>
						<div class="col-lg-6 portfolio-item">
							<div>
								<div class="card-body">
									<h5>การใช้ประโยชน์</h5>
									<div class="control-group form-group">
			              <div class="controls">
											<label>สรรพคุณ:</label>
			                <textarea rows="3" cols="100" class="form-control" id="H_PROP" name="H_PROP" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<label>อาหาร:</label>
			                <textarea rows="3" cols="100" class="form-control" id="H_FOOD" name="H_FOOD" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<label>ความงาม:</label>
			                <textarea rows="3" cols="100" class="form-control" id="H_BEAUTY" name="H_BEAUTY" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<label>พืชมงคล/ความเชื่อ:</label>
			                <textarea rows="3" cols="100" class="form-control" id="H_BELIEF" name="H_BELIEF" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<label>ไม้ประดับ:</label>
			                <textarea rows="3" cols="100" class="form-control" id="H_ORNAMENTAL" name="H_ORNAMENTAL" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 portfolio-item">
							<div>
								<div class="card-body">
									<div class="control-group form-group">
			              <div class="controls">
											<h5>การขยายพันธุ์:</h5>
			                <input type="text" class="form-control" id="H_PROPAGATION" name="H_PROPAGATION" value="">
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>แหล่งที่มา:</h5>
			                <input type="text" class="form-control" id="H_SOURCE" name="H_SOURCE" value="">
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>วิธีการรักษา:</h5>
			                <textarea rows="5" cols="100" class="form-control" id="H_TREATMETHOD" name="H_TREATMETHOD" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>ส่วนที่ใช้ในการรักษา:</h5>
			                <textarea rows="5" cols="100" class="form-control" id="H_TREATUSED" name="H_TREATUSED" maxlength="999" style="resize:none"></textarea>
			              </div>
			            </div>
									<div class="control-group form-group">
			              <div class="controls">
											<h5>ตำแหน่งที่พบ:</h5>
			                <input type="text" class="form-control" id="H_LOCATION" name="H_LOCATION" value="">
			              </div>
			            </div>
									<div id="success"></div>
			            <!-- For success/fail messages -->
									<button type="submit" class="btn btn-primary" id="btnAddKm">บันทึก</button>
								</div>
							</div>
						</div>
					<!-- /.row -->
	    </div>
    <!-- /.container -->

    <!--footer starts from here-->
		<?php include ("footeradmins.php"); ?>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }?>
