<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //add food
  if(isset($_POST['DName'])){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $target_filename = basename($_FILES['filUpload_d']['name']);
    $img_path = "../admins/DFiles/";
    $upload_path = $img_path.$target_filename;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดได้');</script>";
      exit();
    }else{
      $sql = "INSERT INTO
                download_data(D_NAME, D_FILES)
              VALUES('".$_POST['DName']."','".$target_filename."')";
      mysqli_query($conn,$sql);
      echo '<script>alert("เพิ่มข้อมูลเรียบร้อยแล้ว");window.location.href="downloadlist.php"</script>';
    }
  }
  mysqli_close($conn);
?>
</body>
</html>
