<!DOCTYPE html>
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

    <!--footer starts from here-->
		<footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">สนับสนุนโดย</h5>
					<!--headin5_amrc-->
					<p class="mb10">งานวิจัยนี้ได้รับทุนสนับสนุนการวิจัยจากงบประมาณแผ่นดิน ภายใต้โครงการ "การพัฒนาฐานทรัพยากรตามแผนแม่บทโครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ" (อพ.สธ.) มหาวิทยาลัยราชภัฏเลย ประจำปีงบประมาณ 2563</p>
					     </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">ติดต่อนักวิจัย</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<p><i class="fa fa-location-arrow"></i> มหาวิทยาลัยราชภัฏเลย </p>
							<p><i class="fa fa-phone"></i> 042835223-8 </p>
							<p><i class="fa fa fa-envelope"></i> info@lru.ac.th </p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">เว็บลิ้งค์</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="adminindex.php">หน้าหลัก</a></li>
						<li><a href="herblist.php">จัดการข้อมูลสมุนไพร</a></li>
						<li><a href="meddoclist.php">จัดการข้อมูลหมอยาหนองหิน</a></li>
						<li><a href="kmdatalist.php">จัดการข้อมูลคลังภูมิปัญญาท้องถิ่น</a></li>
						<li><a href="downloadlist.php">จัดการข้อมูลดาวน์โหลด</a></li>
						<li><a href="profileedit.php">จัดการโปรไฟล์</a></li>

					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<?php
				include ("../config/connect.php");
				$sql = "SELECT * FROM login_admin WHERE ID = '".$_SESSION["UserID"]."' ";
				$result = mysqli_query($conn, $sql) or die ("Error Query [".$sql."]");
				$row = mysqli_fetch_array($result);
			?>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<h5 class="headin5_amrc col_white_amrc pt2">ผู้ใช้งานขณะนี้ : <?php echo $row["FNAME"];?></h5>
					<!--headin5_amrc-->
						<form action="logout.php" method="post">
							<div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-default">ออกระบบ</button>
              </div>
						 </form>

					<!--footer_ul_amrc ends here-->
				</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">

			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">All Rights Reserved. &copy; LOEI RAJAPHAT UNIVETSITY 2020
            </p>

            <!--social_footer_ul ends here-->
        </div>
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
