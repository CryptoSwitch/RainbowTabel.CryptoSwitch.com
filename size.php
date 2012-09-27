<?php

$conn = mysql_connect('localhost', 'mysql_user', 'mysql_pass', 1, 65536);
$res = mysql_query( "select table_name from information_schema.tables where table_schema='rainbowtables'", $conn );
$size=mysql_num_rows( $res );

        echo '<p>We currently have about ' . $size . ' million rows of Rainbow Tables in the database and are still generating!' . "</p>";  //Each table should have 1 million rows in it.

?>