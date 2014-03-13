<?php

$data = array();
$loop_num = 1000;
$searchString = "abc";

for ($i=0; $i<=$loop_num; $i++) {
	$randKey = uniqid('',true);
	$randValue = uniqid("php500StressTest",true);
	
	$data[$randKey] = $randValue;
	
	$i++;
}

foreach ($data as $key => $value) {

	if (preg_match('/'.$searchString.'/i', $value)) {
		$matchKey = $key;
		$matchValue = $value;
	}
}

if (!empty($matchKey)) {
	echo "Match! key=>".$matchKey." value=>".$matchValue;
} else {
	echo "not match.";
}

?>