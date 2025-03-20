<?php
$toEmail = "admin@phppot_samples.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
header("location: success.php");
} else {
header("location: failed.php");
}
?>