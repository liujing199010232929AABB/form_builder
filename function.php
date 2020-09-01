<?php
	$arr = array(
		'type'=>'mysql',
		'host'=>'127.0.0.1',
		'charset'=>'utf8',
		'port'=>3306,
		'name'=>'zhulaoshi',
		'user'=>'root',
		'pass'=>'root'
	);
	
	//mysql:host=127.0.0.1;dbname=zhulaoshi;charset=utf8;port=3306;
	$db = "{$arr['type']}:host={$arr['host']};
			dbname={$arr['name']};
			charset={$arr['charset']};
			port={$arr['port']}";
	$root = $arr['user'];
	$pass = $arr['pass'];
	$a = new PDO($db,$root,$pass);
	// print_r($a);


	$sql = "SELECT * FROM `teacher` WHERE `age` < 20";
	$b = $a->prepare($sql);
	$c = $b->execute();
	$d = $b->rowCount();
	$e = $b->setFetchMode(PDO::FETCH_ASSOC);
	$f = $b->fetchAll();
	print_r($f);


