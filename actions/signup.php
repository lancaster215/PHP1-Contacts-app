<?php
if(isset($_POST['submit'])){
    include_once '../include.php';

    $first = mysqli_real_escape_string($con, $_POST['first']);
    $middle = mysqli_real_escape_string($con, $_POST['middle']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $middle) || !preg_match("/^[a-zA-Z]*$/", $last)){
        header("Location: ../components/register.php?signup=invalid");
        exit();
    }else{
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_details(user_fname, user_mname, user_lname, address, contact_num, password) VALUES ('$first', '$middle', '$last', '$address', '$contact', '$hash_pass')";
        mysqli_query($con, $sql);
        $sql1 = "INSERT INTO users(userd_id, username) VALUES (LAST_INSERT_ID(),'$first')";
        mysqli_query($con, $sql1);
        header("Location: ../index.php");
        exit();
    }
}else{
    header("Location: ../index.php");
    exit();
}
?>