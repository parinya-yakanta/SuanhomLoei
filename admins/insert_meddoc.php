<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //add food
  if(isset($_POST['MedFname'])){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/MedImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');</script>";
      exit();
    }else{
      $sql = "INSERT INTO
                medicine_doc(MED_FNAME, MED_SKILL, MED_DATA, MED_ADDR, MED_TEL, MED_IMG)
              VALUES('".$_POST['MedFname']."','".$_POST['MedSkill']."','".$_POST['MedData']."','".$_POST['MedAddr']."','".$_POST['MedTel']."','".$new_img_name."')";
      mysqli_query($conn,$sql);
      echo '<script>alert("เพิ่มข้อมูลเรียบร้อยแล้ว");window.location.href="meddoclist.php"</script>';
    }
  }
  mysqli_close($conn);
?>
</body>
</html>
