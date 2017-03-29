<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css" >
	<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" >
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<title>作業2</title>
</head>
<body>
	<style>
		.wrap{
			margin: auto;
			font-family: 'Quicksand', sans-serif,微軟正黑體;
			text-align: center;
		}
		.profile{
		    font-family: 'Quicksand', sans-serif,微軟正黑體; 
		    color: #696969;
		    line-height: 35px;
		    width: 30%;
		    margin-right: 35%;
		    margin-left: 35%;
		    position: relative;
		    text-align: left;
		}
		.blank{
			font-family: 'Quicksand', sans-serif,微軟正黑體;
		    text-align: left;
		 	width: 250px;
		 	height: 25px;
		 	margin-top: 5px;
		}
		li{
			list-style: none;
			margin-bottom: 8px;
		}
		b{
			color: #4A4A4A;
			margin-left: 10px;
		}
		textarea {
  			resize : none;
  			font-family: 'Quicksand', sans-serif,微軟正黑體;
  			font-size: 14px;
		}
		.btn{
			font-family: 'Quicksand', sans-serif;
			font-size: 25px;
  			line-height: 15px;
  			margin-top: 20px;
  			padding:5px;
  			letter-spacing: 1px;
  			border: 1px solid #02CBCE;
  			color: #02CBCE;
  			border-radius: 3px;
  			background: #fff;
  			cursor: pointer;
		}
		.btn:hover{
			color: #fff;
			background: #02CBCE;
			-webkit-transition: 0.6s;
		}
	</style>

	<div class="wrap">
		<h1>去死去死單身團入團申請</h1>
		<form action="HW3_show.php" method="post" enctype="multipart/form-data">
			<div class="profile">
				<ul>
					<li>
						姓名：<input type="text" class="blank" name="name" placeholder="請輸入您的名子" maxlength="12">
					</li>
					<li>
						職業：<input type="text" class="blank" name="job" placeholder="請輸入您的職業" maxlength="10">
					</li>
					<li>
						性別：
						<input type="radio" name="gender" value="male">男
						<input type="radio" name="gender" value="female">女
					</li>
					<li>
						魯蛇資歷：<br>
						<input type="radio" name="single" value="1">1年以下，燒
						<input type="radio" name="single" value="2">3年起步，死刑不虧
						<input type="radio" name="single" value="3">5~10年
						<input type="radio" name="single" value="4">10年以上
					</li>
					<li>
						團服Size：
						<select name="size">
							<option value="S">S</option>
    						<option value="M">M</option>
    						<option value="L">L</option>
    						<option value="XL">XL</option>
    						<option value="WTF">XML</option>
						</select>
					</li>
					<li>
						問題及意見:
						<textarea cols="30" rows="10" placeholder="請輸入想要說的話..."></textarea>
					</li>
				</ul>
			</div>
			<button type="Submit" class="btn">Submit</button>
		</form>
	</div>
</body>
</html>