<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>作業5</title>
</head>
<body>
	<div class="upload"></div>
	<script type="text/javascript">
		var i = <?php echo $_GET["amount"] ?>;
		if(!i)
		{
			$(".upload").append("<p>您尚未選擇上傳數量</p>");			
		}
		else{
			for(var a = 0;a < i;a++){
				$(".upload").append("<li><input type = 'file'><input type = 'submit'></li>");
			}
		}
	</script>
</body>
</html>