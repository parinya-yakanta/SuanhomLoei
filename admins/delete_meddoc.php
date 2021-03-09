<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //delete menu
  if(isset($_GET['idmeddoc'])){
    $sql = "SELECT * FROM medicine_doc WHERE MED_ID = '".$_GET['idmeddoc']."'";
    $result = mysqli_query($conn,$sql);
      while($del = mysqli_fetch_assoc($result)){
        $img = $del['MED_IMG'];
      }
    @unlink('MedImg/'.$img);
    $sql = "DELETE FROM medicine_doc WHERE MED_ID = '".$_GET['idmeddoc']."'";
    mysqli_query($conn,$sql);
    echo '<script>alert("ลบข้อมูลเรียบร้อย");window.location.href="meddoclist.php"</script>';
  }
  mysqli_close($conn);
?>
</body>
</html>
