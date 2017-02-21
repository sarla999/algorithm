<?php
/**
*bubble sort php
**/

	function bubble_sort() 
	{
		$input_data = [7,5,9,3,6,2,11,8];
		$t;

		for ($i=0; $i<count($input_data)-1; $i++) {
			for ($j=0; $j<count($input_data)-1-$i; $j++) {
				echo $i,$j;
				//bubble
				if ($input_data[$j] > $input_data[$j+1]) {
					$t = $input_data[$j];
					$input_data[$j] = $input_data[$j+1];
					$input_data[$j+1] = $t;
				}

				echo json_encode($input_data)."\n";
			} 
		}	

		//print_r($input_data);

	}


	bubble_sort();
