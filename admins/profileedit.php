<?php session_start();?>
<?php
include ("../config/connect.php");
if (!$_SESSION["UserID"]){
	Header("Location: ../index.php");
}else{
?>
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
									 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
				<li class="breadcrumb-item active">จัดการโปรไฟล์</li>
			</ol>
		</div>
		<?php
			include "../config/connect.php";
			$sql = "SELECT * FROM login_admin WHERE ID = '".$_SESSION["UserID"]."' ";
			$result = mysqli_query($conn, $sql) or die ("Error Query [".$sql."]");
			$row = mysqli_fetch_array($result);
		?>
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg mb-4 contact-left">
          <h3>ข้อมูลผู้ดูแลระบบ</h3>
          <form role="form" name="editAdmin" id="editAdmin" action="update_admin_data.php?iduser=<?php echo $_GET["iduser"];?>" method="post" enctype="multipart/form-data">
						<div class="control-group form-group">
              <div class="controls">
                <label>ชื่อ-นามสกุล:</label>
                <input type="text" class="form-control" id="Fname" name="Fname" value="<?php echo $row["FNAME"];?>">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>username:</label>
                <input type="text" class="form-control" id="Uname" name="Uname" value="<?php echo $row["USERNAME"];?>">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>password:</label>
                <input type="text" class="form-control" id="Pword" name="Pword" value="<?php echo $row["PASSWORD"];?>">
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="editButton">บันทึก</button>
          </form>
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
