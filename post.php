<html>
<?php


$hashtag="a"; //Arbitrary start point, must be </= starting database suffix

while(strlen($hashtag)<4){ //Creating loop to continue searching tables until the suffix reaches a length specified.  In this case, once the suffix reaches 4 characters, loop will stop.

$hash = $_POST['hash']; //Get data entered in text field of query.php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_pass'); //Connect to database
if (!$link) {
    die('Could not connect: ' . mysql_error()); //Show error if connection failed.  Will be removed for production
}
mysql_select_db('rainbowtables'); //Select database

$result = mysql_query("SELECT pass FROM Hashes_$hashtag  WHERE hash = '$hash'") or trigger_error(mysql_error()); //Set query variable with current table in loop

$query_row = mysql_fetch_array($result); //Run query
#if (!$result) {
#    die('Could not query:' . mysql_error()); //Show error if query fails, for testing only
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
    $html=htmlentities(($query_row['pass'])); //Make results HTML safe
    echo "$html";
    echo '<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>';

    mysql_close($link); //Close MySQL Connection, should probably remove open and close from loop and only do once
    die;
  }
}
  mysql_close($link);
  $hashtag = ++$hashtag; //Advance suffix to next letter
}
?>
<!--If no result found, show this-->
Results not yet in database
</br>
<form><input type="button" value="Back" onClick="history.go(-1);return true;"></form></html>
