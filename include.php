<?php
$con = mysqli_connect("localhost", "root", "", "miniproj1") or die ('Cannot connect to DB');
if($con -> connect_error){
    $_SESSION['err_msg'] =  "DB connection failed'";
    header("Location: ./index.php");
    exit();
}
?>