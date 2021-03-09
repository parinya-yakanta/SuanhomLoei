<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include "../config/connect.php";
//edit med
if(isset($_GET['idmeddoc'])){
  //check image
  if($_FILES['filUpload_d']['name'] != ""){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/MedImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');window.location.href='meddocedit.php?idmeddoc=".$_GET['idmeddoc']."'</script>";
      exit();
    }else{
      $sql = "SELECT MED_IMG FROM medicine_doc WHERE MED_ID = '".$_GET['idmeddoc']."'";
      $result = mysqli_query($conn,$sql);
      while($img = mysqli_fetch_assoc($result)){
        $file_img = $img['MED_IMG'];
      }
      @unlink('MedImg/'.$file_img);
      $sql1 = "UPDATE medicine_doc SET MED_FNAME = '".$_POST['MedFname']."', MED_SKILL = '".$_POST['MedSkill']."', MED_DATA = '".$_POST['MedData']."', MED_ADDR = '".$_POST['MedAddr']."',
                 MED_TEL = '".$_POST['MedTel']."', MED_IMG = '".$new_img_name."'
               WHERE MED_ID = '".$_GET['idmeddoc']."'";
      mysqli_query($conn,$sql1);
      echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='meddocedit.php?idmeddoc=".$_GET['idmeddoc']."'</script>";
    }
  }else{
    $sql1 = "UPDATE medicine_doc SET MED_FNAME = '".$_POST['MedFname']."', MED_SKILL = '".$_POST['MedSkill']."', MED_DATA = '".$_POST['MedData']."', MED_ADDR = '".$_POST['MedAddr']."',
               MED_TEL = '".$_POST['MedTel']."'
             WHERE MED_ID = '".$_GET['idmeddoc']."'";
    mysqli_query($conn,$sql1);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='meddocedit.php?idmeddoc=".$_GET['idmeddoc']."'</script>";
  }
  //echo $sql1;
}
mysqli_close($conn);
?>
</body>
</html>
