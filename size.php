<?php
	function get_size($size) {
	$bytes = array('B','KB','MB','GB','TB');
	  foreach($bytes as $val) {
	   if($size > 1024){
	    $size = $size / 1024;
	   }else{
	    break;
	   }
	  }
	  return round($size, 2)." ".$val;
	}
	
	 $filename = '/home/gravypod/HashList.txt';
	 //$size = round(filesize($filename) / 1073741824, 2);
		$size = get_size(filesize($filename));
	echo '<p>We currently have ' . $size . ' of Rainbow Tables generated and are still generating!' . "</p>";


?>