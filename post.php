<html>
<?php
###Only using letters, this function no longer needed
#function nextNumber($previous) {
#  if(is_numeric($previous)) {
#    $next = $previous.'a';
#  } else  if(substr($previous,-1) == 'z') {
#    $next = substr($previous,0,-1).'aa';
#  } else {
#    $lastChr = substr($previous,-1);
#    $next = substr($previous,0,-1).++$lastChr;
#  }
#  return $next;
#}
$hashtag="zz";

#Search databases with the table name of Hashes_xxx, increase number later if more tables exist
while(strlen($hashtag)<4){

#Get data from input, search database
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
#Check for correclt length of MD5 hash entered
if(strlen($hash)!=32){
  echo 'MD5 hashes must be 32 characters in length</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>';
  die;
  } else {

#If no result, do nothing and continue
  if(($query_row['pass'])==""){
  #do nothing at this time
  } else {
#If result found, show result and stop searching
    echo($query_row['pass']);
    echo '</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>';

    mysql_close($link);
    die;
  }
}
#Advance to next letter and loop
  $hashtag = ++$hashtag;
}
?>
<!--If no result found, show this-->
Results not yet in database
</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>