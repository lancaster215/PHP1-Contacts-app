<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <title>Login</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['u_id'])){
            if(isset($_GET['logout'])){
                echo "<h5 class='success center'>Successfully Logout!</h5>";
            }
            include './components/login.php';
        }else{
            header("Location: ./components/contacts.php");
            exit();
        }
        // echo bindec('b2a31229e2adfe985bea9c34ead24bc6')
    ?>
</body>
<script>
    var typed = new Typed('.text-type', {
        strings: ["here!", "now!"],
        typeSpeed: 400,
        backSpeed: 100,
        loop: true,
        loopCount: Infinity,
    });
</script>
</html>