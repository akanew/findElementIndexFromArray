<?php
	// Создание массива случайных чисел
	function randArrGenerate($arrLength){ 
	
		$arr = array();
		
		for($i=0; $i<$arrLength; $i++)
			$arr[$i] = rand();
		
		return $arr;
	}
	
	//Упорядочивание массива
	function sortAscArr($arr){	
		$tmp = arr[0];
		for ($i = 0; $i < count($arr); $i++) {
				for ($j = 0; $j < count($arr); $j++) {
					if ($arr[$j] < $arr[$j-1]) {
						$tmp = $arr[$j];
						$arr[$j] = $arr[$j-1];
						$arr[$j-1] = $tmp;
					}
				}
			}
			
		return $arr;
	}?>
