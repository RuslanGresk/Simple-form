<?php

function debug($date){
	echo '<pre>' . print_r($date, 1) . '</pre>';
}

function load($date){
	foreach ($_POST as $k => $v){
		if(array_key_exists($k, $date)){
			$date[$k]['value'] = trim($v);
		}
	}
	return $date;
}

function validate($date){
	$errors='';
	foreach($date as $k => $v){
		if ($date[$k]['requiered'] && empty($date[$k]['value'])){
			$errors .= '<li> Ви не заповнили поле {$date[k]["field_name"]}</li>';
		}
	if(!check_captca($date['captcha']['value'])){
		$errors .= '<li> Не вірно заповнене поле каптча</li>';
	}
	}
	return $errors;
}

function set_caprcha(){
	$num1 = rand(1, 100);
	$num2 = rand(1, 100);
	$_SESSION['captcha'] = $num1 + $num2;
	return "Скільки буде {$num1} + {$num2}?";
}

function check_captca($res){
	return $_SESSION['captcha'] == $res;
}





?>