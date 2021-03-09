<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //delete menu
  if(isset($_GET['idh'])){
    $sql = "SELECT H_IMG FROM herb_data WHERE H_ID = '".$_GET['idh']."'";
    $result = mysqli_query($conn,$sql);
      while($del = mysqli_fetch_assoc($result)){
        $img = $del['H_IMG'];
      }
    @unlink('HerbImg/'.$img);
    $sql = "DELETE FROM herb_data WHERE H_ID = '".$_GET['idh']."'";
    mysqli_query($conn,$sql);
    echo '<script>alert("ลบข้อมูลเรียบร้อย");window.location.href="herblist.php"</script>';
  }
  mysqli_close($conn);
?>
</body>
</html>
