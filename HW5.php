<DOCTYPE html>

<head>
	<title>作業5</title>
	<meta charset="utf-8" />
</head>

<body>

<?php
session_start();
if (isset($_POST["product"])) {	 				//只要product有回傳
	$_SESSION["num"]=$_POST["num"];
	$id=$_POST["product"];
	$_SESSION["id"]=$id;
	switch ($id) {
		case "p1";
		$_SESSION["name"]="IPhone 7";
		$_SESSION["price"]=20000;	
		break;
		
		case "p2";
		$_SESSION["name"]="HTC U11";
		$_SESSION["price"]=19900;	
		break;
		case "p3";
		$_SESSION["name"]="Zenfone3";
		$_SESSION["price"]=9900;	
		break;
	}
	echo "<script>
        	alert('訂購成功');
       		location.replace('save.php');
      	</script>"; 
}
?>


	<form action="HW5.php" method="post">

	商品目錄：<select name="product">
		<option value="p1" select="true">IPhone 7 $20000</option>
		<option value="p2">HTC U11 $19900</option>
		<option value="p3">Zenfone3 $9900</option>
	</select>
	<input type="text" name="num" placeholder="請輸入數量">
	<input type="submit" value="加入購物車">
	</form>
	<a href="HW5.php" style="float: left; margin-right: 10px;">商品目錄</a>
	<a href="cart.php">購物車</a>

</body>

</DOCTYPE>