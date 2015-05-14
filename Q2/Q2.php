<?php

function isOne($num)
{
	if(	abs($num)=== 1)
	{
		return true;
	}
	return false;
}

function consecutiveNumIndices($inputs)
{
	$deltas = array(); 
	$remove_keys = array(); 

	for($i = 0; $i < count($inputs)-1; $i++)
	{
		$deltas[] = $inputs[$i + 1] - $inputs[$i];
	}

	$filtered_deltas = array_filter($deltas, 'isOne');
	
	if(count($filtered_deltas)=== 0)
	{	
		return null;
	}

	$deltas_keys = array_keys($filtered_deltas);

	while(current($deltas_keys) !== False)
	{
		$curr_key = current($deltas_keys);
		$next_key = next($deltas_keys);

		$curr_delta = current($filtered_deltas);
		$next_delta = next($filtered_deltas);
		
		if($next_delta === $curr_delta and 
			$next_key - $curr_key === 1)
		{
			$remove_keys[] = key($deltas_keys);
		}	
	}
	
	foreach($remove_keys as $key){
		unset($deltas_keys[$key]);
	}

	return $deltas_keys;


}

$inputs = array(1, 1, 3, 5, 6, 8, 10, 11, 10, 9, 8, 9, 10, 11, 7);
$positions = consecutiveNumIndices($inputs);
var_dump($positions);