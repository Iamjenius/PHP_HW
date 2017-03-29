<?php

	date_default_timezone_set("Asia/Taipei");
	$t=time();
	if(date("n")==1){echo "<div style='background:#D9B3B3; width:100%; height:100%;'";}
	if(date("n")==2){echo "<div style='background:#FFC1E0; width:100%; height:100%;'";}
	if(date("n")==3){echo "<div style='background:#CCFF80; width:100%; height:100%;'";}
	if(date("n")==4){echo "<div style='background:#FFE66F; width:100%; height:100%;'";}
	if(date("n")==5){echo "<div style='background:#FFC78E; width:100%; height:100%;'";}
	if(date("n")==6){echo "<div style='background:#FF9D6F; width:100%; height:100%;'";}
	if(date("n")==7){echo "<div style='background:#FF5809; width:100%; height:100%;'";}
	if(date("n")==8){echo "<div style='background:#BB3D00; width:100%; height:100%;'";}
	if(date("n")==9){echo "<div style='background:#A5A552; width:100%; height:100%;'";}
	if(date("n")==10){echo "<div style='background:#4F9D9D; width:100%; height:100%;'";}
	if(date("n")==11){echo "<div style='background:#7373B9; width:100%; height:100%;'";}
	if(date("n")==12){echo "<div style='background:#B766AD; width:100%; height:100%;'";}
	echo("<br>");
	echo(date("Y F j H:i:s D",$t)."<br>");

	$today = strtotime(date("Y-n-j H:i:s"));
	$target = strtotime("2017-12-31 00:00:00");
	$countday = floor(($target - $today) / 86400);
	$counthr = floor((($target - $today) % 86400)/3600);
	$countmin = floor(((($target - $today) % 86400)%3600)/60);
	$countsec = floor(((($target - $today) % 86400)%3600)%60);
	
	echo "距離世界末日還有倒數".$countday."天".$counthr."時".$countmin."分".$countsec."秒";

?>