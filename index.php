<?php
	header ("Content-Type: text/html; charset=utf-8");
	include_once("./findElementIndexFromArray.php");
	include_once("./utilits.php");

	//Подготовка к поиску элемента массива
	$arr = array();
	$arrLength = 10;
	$arr = randArrGenerate($arrLength);
	$arr = sortAscArr($arr);
	$searchValue = $arr[6];
	
	//Определение индекса элемента
	$resVal = find_element_index($arr, $searchValue);
	
	echo "Found index: ".$resVal;
?>
