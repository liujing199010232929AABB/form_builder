<?php
	include('fun.php');
	if(empty($_GET['id'])){
		echo "<script>alert('未找到用户');window.location.href='table3.php';</script>";
		return false;
	}

	$find = find('teacher','*','id='.$_GET['id']);
	if(empty($find)){
		echo "<script>alert('未找到用户');window.location.href='table3.php';</script>";
		return false;
	}
	// print_r($find);
	// eixt;


	$del = delete('teacher','id='.$_GET['id']);
	if($del){
		echo "<script>alert('删除成功');window.location.href='table3.php';</script>";
		return false;
	}else{
		echo "<script>alert('删除成功');window.location.href='table3.php';</script>";
		return false;
	}