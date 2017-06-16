<?php
session_start();
if (isset($_SESSION["id"])) {
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$num=$_SESSION["num"];
	// 儲存選購商品的陣列Cookie
	setcookie($id."[id]", $id, time()+3600);
	setcookie($id."[name]", $name, time()+3600);
	setcookie($id."[price]", $price, time()+3600);
	setcookie($id."[num]", $num, time()+3600);
	$test=$_COOKIE["id.id"];
	echo "id=".$test;
}
echo "<script>
       		location.replace('cart.php');
      </script>";