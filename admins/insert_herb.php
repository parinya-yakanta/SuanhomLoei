<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
  include "../config/connect.php";
  //add herb
  if(isset($_POST['H_LNAME'])){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/HerbImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');</script>";
      exit();
    }else{
      $sql = "INSERT INTO
                herb_data(H_LNAME, H_GNAME, H_SNAME, H_PROP, H_FOOD, H_BEAUTY, H_BELIEF, H_ORNAMENTAL, H_PROPAGATION, H_SOURCE, H_TREATMETHOD, H_TREATUSED, H_LOCATION, H_IMG)
              VALUES('".$_POST['H_LNAME']."','".$_POST['H_GNAME']."','".$_POST['H_SNAME']."','".$_POST['H_PROP']."','".$_POST['H_FOOD']."',
                     '".$_POST['H_BEAUTY']."','".$_POST['H_BELIEF']."','".$_POST['H_ORNAMENTAL']."','".$_POST['H_PROPAGATION']."','".$_POST['H_SOURCE']."',
                     '".$_POST['H_TREATMETHOD']."','".$_POST['H_TREATUSED']."','".$_POST['H_LOCATION']."','".$new_img_name."')";
      mysqli_query($conn,$sql);
      echo '<script>alert("เพิ่มข้อมูลเรียบร้อยแล้ว");window.location.href="herblist.php"</script>';
    }
  }
  mysqli_close($conn);
?>
</body>
</html>
