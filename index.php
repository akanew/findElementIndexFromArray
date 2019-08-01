<?php
	header ("Content-Type: text/html; charset=utf-8");

	//Подготовка к поиску элемента массива
	$arr = array();
	$arrLength = 10;
	$arr = randArrGenerate($arrLength);
	$arr = sortAscArr($arr);
	$searchValue = $arr[8];
	
	$resVal = find_element_index($arr, $searchValue);
	
	echo "Found index: ".$resVal;
	
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
	
		function find_element_index($arr, $value){

		$find_element = $value;
		$find_index = count($arr);
		$half_index = count($arr);
		$offset = 0;
		
		// Вывод ошибок неудачного ввода даных пользователем
		if($find_index > count($arr)){
			echo "Find element out of array range </br>";
			return -1;
		} else if(($arr[$find_index-1] < $find_element) || ($arr[0] > $find_element)){
			echo "Find element value out of array numbers value range </br>";
			return -1;
		}
		else 
			// Поиск индекса указанного в find_element значения
			while(($arr[$find_index] != $find_element)){				
				
				// Делим область поиска пополам пока это возможно
				if($half_index > 1) 
					$half_index = ceil($half_index/2);
				else $half_index=0;
				
				// Утверждаем индекс элемента сравнения
				$find_index = $offset + $half_index;
				
				//echo $arr[$find_index]." ? ".$find_element."</br>";
				// Определяем смещение сравнивая значения элементов индекса поиска и искомого
				if ($arr[$find_index] < $find_element)    		// Если искомый элемент лежит правее текущего индекса поиска
					$offset += $half_index;
				/* else if($arr[$find_index] > $find_element)	// Если искомый элемент лежит левее текущего индекса поиска
					$offset = $offset;
				else if ($arr[$find_index] == $find_element)	// Если искомый элемент имеет значение эквивалентное значению с индексом поиска
					break;*/								// Закомментированные условия оставлены для понимания процесса работы
			}
			
		return $find_index;
	}
?>
