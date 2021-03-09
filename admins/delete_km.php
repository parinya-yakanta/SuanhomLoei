<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //delete menu
  if(isset($_GET['idkm'])){
    $sql = "SELECT KM_IMG FROM km_base WHERE KM_ID = '".$_GET['idkm']."'";
    $result = mysqli_query($conn,$sql);
      while($del = mysqli_fetch_assoc($result)){
        $img = $del['KM_IMG'];
      }
    @unlink('KmImg/'.$img);
    $sql = "DELETE FROM km_base WHERE KM_ID = '".$_GET['idkm']."'";
    mysqli_query($conn,$sql);
    echo '<script>alert("ลบข้อมูลเรียบร้อย");window.location.href="kmdatalist.php"</script>';
  }
  mysqli_close($conn);
?>
</body>
</html>
