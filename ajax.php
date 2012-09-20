<?php
	function time2string($timeline) {
	    $periods = array('day' => 86400, 'hour' => 3600, 'minute' => 60, 'second' => 1);

	    foreach($periods AS $name => $seconds){
	        $num = floor($timeline / $seconds);
	        $timeline -= ($num * $seconds);
	        $ret .= $num.' '.$name.(($num > 1 || $num == 0) ? 's' : '').' ';
	    }

	    return trim($ret);
	}
     $filename = '/home/gravypod/RainbowTabel.jar';
	if (file_exists($filename)) {
			$date = date ("F d Y H:i:s", filemtime($filename));
			$runningfor = time2string(time()-filemtime($filename));
	 }
	echo "<p>We started hashing on: <br/>" . $date . " EDT" . "</p>";
	echo "<p>And has been running for: <br/>". $runningfor . "</p>";	
?>
