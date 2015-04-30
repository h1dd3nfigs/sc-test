<?php

$inputs = array(1, 1, 3, 5, 6, 8, 10, 11, 10, 9, 8, 9, 10, 11, 7);

$deltas = array();

for($i = 0; $i < count($inputs)-1; $i++){
	$deltas[] = $inputs[$i + 1] - $inputs[$i];
}

function isOne($num)
{
	if(	abs($num)== 1){
		return true;
	}
	return false;
}

$filtered_deltas = array_filter($deltas, 'isOne');
$deltas_keys = array_keys($deltas);

// start pointer at 2nd indexed position
next($deltas_keys);
next($deltas);

//foreach($deltas as $delta){	
	if( current($filtered_deltas) == prev($filtered_deltas) and current($deltas_keys) - 1 == prev($deltas_keys) ){
		unset($filtered_deltas);
	}
//}

print_r($filtered_deltas);
