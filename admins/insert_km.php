<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //add food
  if(isset($_POST['KmTopic'])){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/KmImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');</script>";
      exit();
    }else{
      $sql = "INSERT INTO
                km_base(KM_TOPIC, KM_ABS, KM_DATA, KM_REF, KM_IMG)
              VALUES('".$_POST['KmTopic']."','".$_POST['KmAbs']."','".$_POST['KmData']."','".$_POST['KmRef']."','".$new_img_name."')";
      mysqli_query($conn,$sql);
      echo '<script>alert("เพิ่มข้อมูลเรียบร้อยแล้ว");window.location.href="kmdatalist.php"</script>';
    }
  }
  mysqli_close($conn);
?>
</body>
</html>
