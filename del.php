<?php
$id=$_GET["id"]; 
if(isset($_COOKIE[$id])) { 
   while(list($name, $value)=each($_COOKIE[$id]) )
      setcookie($id."[".$name."]", " ", time()-3600); 
}
echo "<script>
        	alert('刪除成功');
       		location.replace('cart.php');
      </script>"; 
?>