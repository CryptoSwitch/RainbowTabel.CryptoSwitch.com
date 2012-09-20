<html>
<?php
$str = $_POST['text'];
echo(md5($str));
?>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>
