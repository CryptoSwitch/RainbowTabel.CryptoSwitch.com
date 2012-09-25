<html>
<?php
function nextNumber($previous) {
  if(is_numeric($previous)) {
    $next = $previous.'a';
  } else  if(substr($previous,-1) == 'z') {
    $next = substr($previous,0,-1).'aa';
  } else {
    $lastChr = substr($previous,-1);
    $next = substr($previous,0,-1).++$lastChr;
  }
  return $next;
}
$hashtag="z";

while(strlen($hashtag)<3){

$hash = $_POST['hash'];
$link = mysql_connect('localhost', 'mysql_user', 'mysql_pass');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rainbowtables');

$result = mysql_query("SELECT pass FROM Hashes_$hashtag  WHERE hash = '$hash'") or trigger_error(mysql_error());

$query_row = mysql_fetch_array($result);
#if (!$result) {
#    die('Could not query:' . mysql_error());
#}
if(strlen($hash)!=32){
  echo 'MD5 hashes must be 32 characters in length</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>';
  die;
  } else {
  if(($query_row['pass'])==""){
  #do nothing at this time
  } else {
    echo($query_row['pass']);

    mysql_close($link);
  }
}
  $hashtag = nextNumber($hashtag);
}
?></br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>
