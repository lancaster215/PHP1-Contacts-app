<?php
if(isset($_POST['submit'])){
    $handle = fopen("../contacts.txt", "a+") or exit("Unable to open file!");

    if($handle){
        fwrite($handle, $_POST['first']." ".$_POST['middle']." ".$_POST['last']." ".$_POST['address']." ".$_POST['contact'].PHP_EOL);
    }
    fclose();
    header("Location: ../components/contacts.php?success=successfully_upload");
    exit();
}
?>