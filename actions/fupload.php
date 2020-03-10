<?php
if(isset($_POST['submit'])){
    $handle = fopen("../contacts.txt", "a+") or exit("Unable to open file!");

    if($handle){
        if ((fgets($handle, 2048)) == false) {
            fwrite($handle, $_POST['first']." ".$_POST['middle']." ".$_POST['last']." ".$_POST['address']." ".$_POST['contact']);
        }else{
            fwrite($handle, PHP_EOL.$_POST['first']." ".$_POST['middle']." ".$_POST['last']." ".$_POST['address']." ".$_POST['contact']);
        }
    }
    fclose();
    header("Location: ../components/contacts.php?success=successfully_upload");
    exit();
}
?>