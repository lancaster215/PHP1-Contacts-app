<?php
include_once '../include.php';
if(isset($_GET['items'])){
    $items = mysqli_real_escape_string($con, $_GET['items']);
    
    $arr = array();
    $open = file("../contacts.txt");

    foreach($open as $line){
        if(trim($line) !== $items){
            $arr[] = $line;
        }
    }
    // var_dump($arr);
    file_put_contents("../contacts.txt", $arr);
    header("Location: ../components/contacts.php");
    exit();
    
    fclose($open);
}
?>