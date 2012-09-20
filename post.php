<html>
<?php
$hash = $_POST['hash'];
$link = mysql_connect('IPGOESHERE', 'USERGOESHERE', 'PASSGOESHERE');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rainbowtables'); 

$result = mysql_query("SELECT pass FROM hashes WHERE hash = '$hash'") or trigger_error(mysql_error());

$query_row = mysql_fetch_array($result);
#if (!$result) {
#    die('Could not query:' . mysql_error());
#}
if(strlen($hash)!=32){
  echo "MD5 hashes must be 32 characters in length";
} else {
  if(($query_row['pass'])==""){
    echo "Result not yet in database";
  } else {
  echo($query_row['pass']); // outputs third employee's name
  }
}
mysql_close($link);
?></br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>
