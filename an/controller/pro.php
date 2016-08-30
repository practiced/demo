<?php
	if(empty($_POST['name'])){
		echo 2;exit;
	}else{
		$name = $_POST['name'];
	}
	if(empty($_POST['pwd'])){
		echo 2;exit;
	}else{
		$pwd = $_POST['pwd'];
	}
	$name_val = 'zhangsan';
	$pwd_val = '123456';
	if($name_val == $name && $pwd == $pwd_val){
		echo 1;exit;
	}else{
		echo 2;exit;
	}
?>