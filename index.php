<?php
	header ("Content-Type: text/html; charset=utf-8");
	
	
	$arr = array();
	$arrLength = 10;
	$arr = randArrGenerate($arrLength);
	
	function randArrGenerate($arrLength){ // Создание массива случайных чисел
		$arr = array();
		
		for($i=0; $i<$arrLength; $i++)
			$arr[$i] = rand();
		
		return $arr;
	}
	
	var_dump($arr);
	
	/*
		function find_element_index(arr, value){

	var find_element = value;
	var find_index = arr.length;
	var half_index = arr.length;
	var offset = 0;

	// Вывод ошибок неудачного ввода даных пользователем
	if(typeof(value) === "undefined"){
			console.log("Value is undefined");
			return -1;
		}
		else if(find_index > arr.length){
			console.log("Find element out of array range");
			return -1;
			}
			else if(arr[find_index] > find_element){
					console.log("Find element value out of array numbers value range");
					return -1;
				 }
	else 
	
		// Поиск индекса указанного в find_element значения
		while((arr[find_index] != find_element)){
			
			// Делим область поиска пополам пока это возможно
			if(half_index > 1) 
				half_index = (half_index/2).toFixed();
			else half_index=0;
			
			// Утверждаем индекс элемента сравнения
			find_index = parseInt(offset) + parseInt(half_index);
			
			// Определяем смещение сравнивая значения элементов индекса поиска и искомого
			if (arr[find_index] < find_element)         // Если искомый элемент лежит правее текущего индекса поиска
				offset += parseInt(half_index);
			 else if(arr[find_index] > find_element)  // Если искомый элемент лежит левее текущего индекса поиска
				offset = offset;
			else if (arr[find_index] == find_element)   // Если искомый элемент имеет значение эквивалентное значению с индексом поиска
				break;                                // Закомментированные условия оставлены для понимания процесса работы
		}
		
	return find_index;
}
	*/
?>
