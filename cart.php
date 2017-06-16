DOCTYPE html>

<head>
	<title>s購物車</title>
	<meta charset="utf-8" />
</head>

<body>

<form action="HW5.php">

<?php
echo "<table border=1>";
echo "<tr>";
echo "<td>商品編號</td>";
echo "<td>商品名稱</td>";
echo "<td>單價</td>";
echo "<td>數量</td>";
echo "<td></td>";
echo "</tr>";
$total=0;
while(list($arr, $value) = each($_COOKIE)){
	echo "<tr>";
	$price=0;
	$num=0;
	while(list($name, $value) = each($_COOKIE[$arr])){
		echo "<td>".$value."</td>";
		if($name=="price"){
			$price=$value;
		}	
		if($name=="num"){
			$num=$value;
		}
	}
		$total=$total+($num*$price);
}
	if ($total!= 0) {
		echo "<tr>";
		echo "<td>總金額= NT$".$total."</td>";
		echo "</tr>";
	}
	echo "<td><a href='del.php?id=".$arr."'>刪除</a></td>";
	echo "</tr>";
echo "<table>";
?>

</form>

	<br>
	<a href="HW5.php" style="float: left; margin-right: 10px;">商品目錄</a><br>
	<a href="cart.php">購物車</a>

</body>

</DOCTYPE> 