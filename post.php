<html>
<?php
#Setup function for number increments
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

#First database ends in aa, start one letter prior
$hashtag="z";


#Change this if we get databases with >3 trailing alphanumeric chars
while(strlen($hashtag)<3){

#Get data from input, search database
$hash = $_POST['hash'];
$link = mysql_connect('localhost', 'mysql_user', 'mysql_pass');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('rainbowtables');

$result = mysql_query("SELECT pass FROM Hashes_$hashtag  WHERE hash = '$hash'") or trigger_error(mysql_error());

$query_row = mysql_fetch_array($result);

#For those who don't understand "Enter hash"
if(strlen($hash)!=32){
  echo 'MD5 hashes must be 32 characters in length</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>';
  die;
  } else {
#for the rest
  if(($query_row['pass'])==""){
  #do nothing at this time
  } else {
    echo($query_row['pass']);

    mysql_close($link);
  }
}

#advance to next letter and loop
  $hashtag = nextNumber($hashtag);
}
?></br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>