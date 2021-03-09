<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include "../config/connect.php";
//edit med
if(isset($_GET['idkm'])){
  //check image
  if($_FILES['filUpload_d']['name'] != ""){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/KmImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');window.location.href='kmdataedit.php?idkm=".$_GET['idkm']."'</script>";
      exit();
    }else{
      $sql = "SELECT KM_IMG FROM km_base WHERE KM_ID = '".$_GET['idkm']."'";
      $result = mysqli_query($conn,$sql);
      while($img = mysqli_fetch_assoc($result)){
        $file_img = $img['KM_IMG'];
      }
      @unlink('KmImg/'.$file_img);
      $sql1 = "UPDATE km_base SET KM_TOPIC = '".$_POST['KmTopic']."', KM_ABS = '".$_POST['KmAbs']."', KM_DATA = '".$_POST['KmData']."', KM_REF = '".$_POST['KmRef']."',
                 KM_IMG = '".$new_img_name."'
               WHERE KM_ID = '".$_GET['idkm']."'";
      mysqli_query($conn,$sql1);
      echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='kmdataedit.php?idkm=".$_GET['idkm']."'</script>";
    }
  }else{
    $sql1 = "UPDATE km_base SET KM_TOPIC = '".$_POST['KmTopic']."', KM_ABS = '".$_POST['KmAbs']."', KM_DATA = '".$_POST['KmData']."', KM_REF = '".$_POST['KmRef']."'
             WHERE KM_ID = '".$_GET['idkm']."'";
    mysqli_query($conn,$sql1);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='kmdataedit.php?idkm=".$_GET['idkm']."'</script>";
  }
  //echo $sql1;
}
mysqli_close($conn);
?>
</body>
</html>
