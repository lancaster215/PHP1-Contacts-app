<?php
session_start();
if(isset($_POST['submit'])){
    include_once '../include.php';

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($con, $sql);
    $rescheck = mysqli_num_rows($res);
    if($rescheck < 1){
        header("Location: ../index.php?erruser=error_user");
        exit();
    }else{
        if($row = mysqli_fetch_assoc($res)){
            $sql1 = "SELECT * FROM user_details WHERE user_fname='$username'";
            $res1 = mysqli_query($con, $sql1);
            $check = mysqli_num_rows($res);
            if($check < 1){
                console.log('error');
            }else{
                if($row1 = mysqli_fetch_assoc($res1)){
                    $hashpasscheck = password_verify($pass, $row1['password']);
                    if($hashpasscheck == false){
                        header("Location: ../index.php?errpass=error_password");
                        exit();
                    }elseif($hashpasscheck == true){
                        // setcookie("logincookie", $row1['userd_id'] , time()+ 3600);
                        $_SESSION['u_id'] = $row1['userd_id'];
                        // $_SESSION['fname'] = $row1['user_fname'];
                        // $_SESSIO['mname'] = $row1['user_mname'];
                        // $_SESSION['lname'] = $row1['user_lname'];
                        // $_SESSION['address'] = $row1['address'];
                        // $_SESSION['contacts'] = $row1['contact_num'];
                        header("Location: ../components/contacts.php");
                        exit();
                    }
                }
            }
        }
    } 
}else{
    header("Location: ../index.php");
    exit();
}
?>