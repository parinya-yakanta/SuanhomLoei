<meta charset="utf-8">
<?php
 session_start();
    if(isset($_REQUEST['Username'])){
        include ("config/connect.php");


        $Username = $_REQUEST['Username'];
        $Password = $_REQUEST['Password'];

        // $Password = md5($_REQUEST['Password']);

        $sql="SELECT * FROM login_admin Where USERNAME='".$Username."' and PASSWORD='".$Password."' ";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION["UserID"] = $row["ID"];
            $_SESSION["User"] = $row["FNAME"];
            $_SESSION["Userlevel"] = $row["LEVEL"];

            if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

            Header("Location: admins/adminindex.php");

            }

          //  if ($_SESSION["Userlevel"]=="M"||$_SESSION["Userlevel"]=="M1"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

          //  Header("Location: master/masterindex.php");

          //  }

		//	if ($_SESSION["Userlevel"]=="M0"){  //ถ้าเป็น member แต่ถูกล็อคสถานะไว้ให้มีข้อความแจ้งและกระโดดไปหน้า index.php
    //        echo "<script>";
    //        echo "alert(\"รหัสผู้ใช้งานของคุณถูกระงับการใช้งาน กรุณาติดต่อผู้ดูแลระบบหลัก \");";
    //        echo "window.history.back()";
    //        echo "</script>";
    //        }

        }else{
            echo "<script>";
            echo "alert(\"ไม่พบผู้ใช้งานในระบบ กรุณาลองใหม่ !! \");";
            echo "window.history.back()";
            echo "</script>";
        }
}else{
    Header("Location: index.php"); //user & password incorrect back to login again
}
?>
