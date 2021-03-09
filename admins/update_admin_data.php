<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php session_start();?>
<?php
if($_SESSION["UserID"]!=""){
  include "../config/connect.php";
    $strSQL = "UPDATE login_admin SET ";
    $strSQL .="FNAME = '".$_POST["Fname"]."' ";
    $strSQL .=",USERNAME = '".$_POST["Uname"]."' ";
    $strSQL .=",PASSWORD = '".$_POST["Pword"]."' ";
    $strSQL .="WHERE ID = '".$_SESSION["UserID"]."' ";
    $objQuery = mysqli_query($conn,$strSQL);
    echo "<script>
  	      alert('บันทึกข้อมูลเรียบร้อยแล้ว');
  		  window.location='profileedit.php';
  		  </script>";
  	//echo "<script>alert("บันทึกข้อมูลเรียบร้อย");window.location="master_edit.php";</script>";
    mysqli_close($conn);
}else{
  echo "<script>
        alert('ไม่มีข้อมูลไอดี');
      </script>";
}

?>
</body>
</html>
