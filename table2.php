<?php 
	//表格生成器
	//print_r($_GET['title']);
	//print_r($_GET['rows']);
	//print_r($_GET['cols']);
	$title = $_GET['title'] ? : '默认表名';
	$rows = $_GET['rows'] ? : 3;
	$cols = $_GET['cols'] ? : 3;
	
	$table = '<table border="1" cellpadding="3" cellspacing="0" width="90%">';
	$table .= '<caption>'.$title.'</caption>';


	$table .= '<thead><tr align="center" bgcolor="lightblue">';
	$tds = '';
	for($t=0;$t<$cols;$t++){
		$tds .= '<td>表头'.($t+1).'</td>';
	}
	$table .= $tds.'</tr></thead>';



	$table .= '<tbody>';
	for($r=0;$r < $rows; $r++){
		$table .= '<tr align="center">';


		$tds = '';
		for($c=0;$c<$cols;$c++){
			$tds .= '<td>'.($r*$cols+$c+1).'</td>';
		}

		
		$table .= $tds.'</tr></tbody>';
	}
	$table .= '</table>';


	
?>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表格自动生成器</title>
</head>
<body>
	<h3>表格自动生成器</h3>
	<form action="" method="get">
		<p>
			<label for="title">输入表名：</label>	
			<input type="text" id="title" name="title" value="<?=$title?>">
		</p>
		<p>
			<label for="rows">输入行数：</label>	
			<input type="number" id="rows" name="rows" value="<?=$rows?>">
		</p>
		<p>
			<label for="cols">输入列数：</label>	
			<input type="number" id="cols" name="cols" value="<?=$cols?>">
		</p>
		<button type="submit">生成</button>
		<div><?php echo $table;  ?></div>
	</form>
	
</body>
</html>