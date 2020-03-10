<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Contacts</title>
</head>
<body>
    <?php
        if(isset($_SESSION['u_id'])){
    ?>
    <div class="topbar">
        <form action="../actions/logout.php" method="POST">
            <div class="logout">
                <input type="submit" name="submit" class="submit-btn" value="Logout">
            </div>
        </form>
        <h1>You just logged in to contacts!</h1>
    </div>
    <?php
        if(isset($_GET['success'])){
            echo "<h5 class='success'>Successfully Uploaded File!</h5>";
        }
    ?>
    <?php include "./forms/form.php"?>
    <?php include "./forms/table.php"?>
    <?php }else if(!isset($_SESSION['u_id'])){
        header("Location: ../index.php");
        exit();
    } ?>
</body>
</html>