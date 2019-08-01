<?php

	// Поиск индекса элемента массива по его значению
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
