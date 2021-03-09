<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include "../config/connect.php";
//edit med
if(isset($_GET['idh'])){
  //check image
  if($_FILES['filUpload_d']['name'] != ""){
    $ext = pathinfo(basename($_FILES['filUpload_d']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().'.'.$ext;
    $img_path = "../admins/HerbImg/";
    $upload_path = $img_path.$new_img_name;
    //uploading
    $success = move_uploaded_file($_FILES['filUpload_d']['tmp_name'],$upload_path);
    if($success == false){
      echo "<script>alert('ไม่สามารถอัพโหลดรูปภาพได้');window.location.href='herbedit.php?idh=".$_GET['idh']."'</script>";
      exit();
    }else{
      $sql = "SELECT H_IMG FROM herb_data WHERE H_ID = '".$_GET['idh']."'";
      $result = mysqli_query($conn,$sql);
      while($img = mysqli_fetch_assoc($result)){
        $file_img = $img['H_IMG'];
      }
      @unlink('HerbImg/'.$file_img);
      $sql1 = "UPDATE herb_data SET H_LNAME = '".$_POST['H_LNAME']."', H_GNAME = '".$_POST['H_GNAME']."',
                                    H_SNAME = '".$_POST['H_SNAME']."', H_PROP = '".$_POST['H_PROP']."',
                                    H_FOOD = '".$_POST['H_FOOD']."', H_BEAUTY = '".$_POST['H_BEAUTY']."',
                                    H_BELIEF = '".$_POST['H_BELIEF']."', H_ORNAMENTAL = '".$_POST['H_ORNAMENTAL']."',
                                    H_PROPAGATION = '".$_POST['H_PROPAGATION']."', H_SOURCE = '".$_POST['H_SOURCE']."',
                                    H_TREATMETHOD = '".$_POST['H_TREATMETHOD']."', H_TREATUSED = '".$_POST['H_TREATUSED']."',
                                    H_LOCATION = '".$_POST['H_LOCATION']."', H_IMG = '".$new_img_name."'
               WHERE H_ID = '".$_GET['idh']."'";
      mysqli_query($conn,$sql1);
      echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='herbedit.php?idh=".$_GET['idh']."'</script>";
    }
  }else{
    $sql1 = "UPDATE herb_data SET H_LNAME = '".$_POST['H_LNAME']."', H_GNAME = '".$_POST['H_GNAME']."',
                                  H_SNAME = '".$_POST['H_SNAME']."', H_PROP = '".$_POST['H_PROP']."',
                                  H_FOOD = '".$_POST['H_FOOD']."', H_BEAUTY = '".$_POST['H_BEAUTY']."',
                                  H_BELIEF = '".$_POST['H_BELIEF']."', H_ORNAMENTAL = '".$_POST['H_ORNAMENTAL']."',
                                  H_PROPAGATION = '".$_POST['H_PROPAGATION']."', H_SOURCE = '".$_POST['H_SOURCE']."',
                                  H_TREATMETHOD = '".$_POST['H_TREATMETHOD']."', H_TREATUSED = '".$_POST['H_TREATUSED']."',
                                  H_LOCATION = '".$_POST['H_LOCATION']."'
             WHERE H_ID = '".$_GET['idh']."'";
    mysqli_query($conn,$sql1);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location.href='herbedit.php?idh=".$_GET['idh']."'</script>";
  }
  //echo $sql1;
}
mysqli_close($conn);
?>
</body>
</html>
