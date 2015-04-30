<?php

/*
Question 2
Given an array of unsorted positive integers, 
write a function that finds runs of consecutive numbers 
(either ascending or descending) 
and returns the indices where such runs begin. 
If no such runs are found, return null.

Example: [1, 1, 3, 5, 6, 8, 10, 11, 10, 9, 8, 9, 10, 11, 7] 
would return [3,6,7,10]
*/

$inputs = array(1, 1, 3, 5, 6, 8, 10, 11, 10, 9, 8, 9, 10, 11, 7);
$consec = array();

/*

set next - current = inc
if inc is either 1 or -1, then set delta equal to inc 
also log the index of current in our consecutive array
Now check the following pair. 
if the pair's diff is equal to opposite of delta, 
log the index of the pair's current. otherwise, move on to next pair.

start from the top setting 
next - current = inc
if inc is either 1 or -1, then set inc equal to delta
*/
$consecutive = array();
$size = count($inputs) - 2; 

$n = 0;
//$delta = 1;


while ($n <= $size) {

	$inc = $inputs[$n + 1] - $inputs[$n];
	if (abs($inc)=== 1) { // scenarios B - D: current position is followed by consecutive
	 	if (count($consecutive)==0){
	 		$delta = $inc;
		 	$consecutive[] = $n ;
	 	} // if it's not empty, compare inc to delta
	 	
	 	
	 	$next_inc = $inputs[$n+2] - $inputs[$n+1];

	 	if($next_inc === -$delta){ 
	 	// scenario C: next position is followed by consecutive in reverse direction
	 	// move pointer up 2 spaces and reverse the delta used for comparison
	 		$consecutive[] = $n + 1;
	 		$n += 2;
	 		$delta = - $delta ;

	 	} elseif ($next_inc === $delta) { 
	 	// scenario B: next position is followed by consecutive in same direction
	 	// move pointer up 2 spaces and keep same delta for comparison
	 		$n += 2;

	 	} else { 
	 	// scenario D: next position is NOT followed by consecutive
	 	//move pointer up 2 spaces but no need for a delta because consecutive can be either asc or desc

	 	}
	} // scenario A: current position is NOT followed by a consecutive, so move pointer by 1 step
	echo '';
	$n +=1;
}
var_dump($inputs);
var_dump($consecutive);