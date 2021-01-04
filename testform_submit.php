<?php
if($_POST["message"]) {    
    $success = mail("pepijn.visser@it4mation.nl", "Form to email message", $_POST["message"], "From: info@eigenaarzoekruiter.nl");
    if (!$success) {
        $errorMessage = error_get_last()['message'];
        <?=$errorMessage ?>
    } else { 
        $thankYou = "Het is gelukt!";
        <?=$thankYou ?>
    }
}
?>
