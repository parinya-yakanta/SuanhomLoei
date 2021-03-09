<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //delete menu
  if(isset($_GET['idd'])){
    $sql = "SELECT D_FILES FROM download_data WHERE D_ID = '".$_GET['idd']."'";
    $result = mysqli_query($conn,$sql);
      while($del = mysqli_fetch_assoc($result)){
        $fil = $del['D_FILES'];
      }
    @unlink('DFiles/'.$fil);
    $sql = "DELETE FROM download_data WHERE D_ID = '".$_GET['idd']."'";
    mysqli_query($conn,$sql);
    echo '<script>alert("ลบข้อมูลเรียบร้อย");window.location.href="downloadlist.php"</script>';
  }
  mysqli_close($conn);
?>
</body>
</html>
