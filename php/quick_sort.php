<?php
/*
*quick sort php
*/

$input_data = [7,5,9,3,6,2,11,8];

//第一种实现方法
function quick_sort($arr) {
	$len = count($arr);	

	if ($len <= 1) {
		return $arr;
	}

	$left = $right = array();
	$pivot = $arr[0];	

	for ($i=1; $i<$len; $i++) {
		if ($arr[$i] < $pivot) {
			$left[] = $arr[$i];
		} else {
			$right[] = $arr[$i];
			}	
	}

	//return array_merge(quick_sort($left),(array)$pivot,quick_sort($right));

	$left = quick_sort($left);
	$right = quick_sort($right);
	
	return array_merge($left,(array)$pivot,$right);
}

//第二种实现方法
function partition(&$arr,$left,$right) {

	if (count($arr) <=1) {
		return $arr;
	}	
	
	$pivot = $arr[($left+$right)>>1];	
	//echo $pivot;

	while ($left <= $right) {
		while ($arr[$right] > $pivot) {
			$right--;
		}

		while ($arr[$left] < $pivot) {
			$left++;
		}

		if ($left <= $right) {
			$temp = $arr[$right];	
			$arr[$right] = $arr[$left];
			$arr[$left] = $temp;
			$left++;
			$right--;
		}
	}
	echo json_encode($arr),$left,"\n";
	return $left;

}



function quick_sort2(&$arr,$leftindex,$rightindex) {

	$index = partition($arr,$leftindex,$rightindex);

	if ($leftindex < $index -1) {
		quick_sort2($arr,$leftindex,$index-1);
	}
	if ($index < $rightindex) {
		quick_sort2($arr,$index,$rightindex);
	}

} 

quick_sort2($input_data,0,count($input_data)-1);
print_r($input_data);

//$sort = quick_sort($input_data);
//print_r($sort);



