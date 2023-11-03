<?php
	$fonts = "verdana";
	$bgcolor = "#3b96d5";
	$fontcolor = "#fff";

	include("Database.php");
	$db = new Database();
?>

<!doctype html>
<html>
<head>
	<title>OSTAD Module 6 Assignment</title>
	<style>
	 html{background: #f1f1f1;} body{font-family:<?php echo $fonts;?>}.phpcoding{width:900px; margin: 0 auto;background:<?php echo "#ffffff" ?>; text-align: center;}.headeroption, .footeroption{background:<?php echo $bgcolor; ?>; color:<?php echo $fontcolor; ?>;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0;font-size:24px}.maincontent{min-height:100vh;padding:20px;font-size:18px}
	 p{margin:0} table th, td{padding: 0.5rem;border-bottom: 1px solid #f1f1f1;} table th{background: #3b96d5;color: #ffffff;}
	input[type="text"]{width:238px;padding:5px;}
	select{font-size:18px;padding:2px 5px;width:250px;}
	.tblone{width:420px;border:1px solid #fff;margin:20px 0}
	.tblone td{padding:5px 10px;}
	table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
	table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
	#myform{width:400px;border:1px solid #fff;padding:10px;}
	</style>
</head>
<body>

<div class="phpcoding">
	<section class="headeroption">
		<h2><?php echo "OSTAD Module 6 Assignment"; ?></h2>
		<p><?php echo "Solving Real-Life Business Problems using SQL"; ?></p>
	</section>
		<section class="maincontent">
	