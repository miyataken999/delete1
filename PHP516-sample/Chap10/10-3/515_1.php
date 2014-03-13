<?php
$data = array();
$loop_num = 1000;
$searchString = "abc";
$i=0;

while ($i<=$loop_num) {
	$randKey = uniqid('',false);
	$randValue = uniqid("php500StressTest",false);
	
	$data[$randKey] = $randValue;
	$i++;
}

foreach ($data as $key => $value) {

	if (eregi($searchString, $value)) {
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