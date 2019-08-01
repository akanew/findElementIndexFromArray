<?php
	header ("Content-Type: text/html; charset=utf-8");
	
	
	$arr = array();
	$arrLength = 10;
	$arr = randArrGenerate($arrLength);
	$arr = sortAscArr($arr);
	
	
	
	function randArrGenerate($arrLength){ // Создание массива случайных чисел
	
		$arr = array();
		
		for($i=0; $i<$arrLength; $i++)
			$arr[$i] = rand();
		
		return $arr;
	}
	
	function sortAscArr($arr){	//Упорядочивание массива
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
	}
	
	
?>
