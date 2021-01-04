<?php
if($_POST["message"]) {
    mail("pepijn.visser@it4mation.nl", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
