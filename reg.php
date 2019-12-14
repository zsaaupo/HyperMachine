<?php 
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "webdev";
	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (!$con) {
	echo "Database is not Connected";
	}


	if (!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$insert = "INSERT INTO data(name,email) VALUES('$name','$email')";
	if (mysqli_query($con,$insert)) {
				echo "Welcome";
			
			}	
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hyper Machine</title>
	<link rel="icon" href="gear.png">
	<style>
		*{padding: 0; margin: auto;}
		body{
			width: auto;
			height: auto;
		}
		.head{
			padding: 50px;
			text-align: center;
		}
		.menu{
			text-align: center;
		}
		.menu ul li{
			position: relative;
			display: inline-block;
			padding: 30px 100px;
			border-style: solid;
			border-width: 1px;
			border-color: black;
		}
		.menu ul li a{
			text-decoration: none;
			color: black;
			font-size: 20px;
		}
		.menu ul li:hover{
			background-color: white;	
		}
		.menu ul input{
		   position: relative;
		}
		.foot{
			text-align: center;
		}
		.foot img{
			height: 50px;
			width: 50px;
			padding: 20px;
		}
		.foot p{
			padding: 20px;
		}




		.img1{
	text-align: center;
	margin-top:60px;
	}
	.imgS{
	height: 200px;
	width: 200px;
	}
	.cover01{
	height: 300px;
	width: 500px;
	background-color: #fff;
	margin: 0 auto;
	margin-top:20px;
	border-radius: 20px;
	border: 5px solid #000;

	}
	.form01a input[type=submit]{
padding: 7px 40px;
background :skyblue;
border :none;
border-radius: 3px;
	}
.form01a input{
	margin: 10 0px;
	border-radius: 3px;
	padding: 7px 40px;
	}
.form01a .Ch01{
	margin-left:20px;
	margin-top: 20px;
	}
td{
	color: #000;
	}
		
	</style>
</head>
<body>
<div class="head">
	<h1>Hyper Machine</h1>
</div>
<div class="menu">
	<ul>
		<li><a href="home.html">Home</a></li>
		<li><a href="pagelogo.html">Hyper</a></li>
		<li><a href="blood.php">Bloodhund</a></li>
		<li><a href="tesla.php">Tesla</a></li>
		<li><a href="reg.php">Join us</a></li>
	</ul>
</div>
	<div class="img1"><img src="icon03.svg" class="imgS">
		</div>
<div class="cover01">
	<div class="form01a">
		<form action="" method="post">
			<table>
				<tr>
					<td><h2 class="Ch01">Contact With Us</h2></td>
				</tr>
				<tr>
					
					<td></td>
					<td><input type="text" name="name" placeholder="Enter Your Name"></td>
				</tr>
				<tr>
					
					<td></td>
					<td><input type="text" name="email" placeholder="Enter Your Email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="Join With Us"></td>
				</tr>
				
				
			</table>
		</form>
	
	</div>	
	</div>
<div class="foot">
	<p>Copy right © 2019 | Desing by Mohammad Zakaria Sarker</p>
	<a href="https://www.facebook.com/md.zakariasarkeraupo"><img src="facebook.png"></a>
	<a href="https://www.youtube.com/channel/UCy8f-o5KZNxG6Rtt9Jgvyww"><img src="youtube.png"></a>
	<a href="https://www.instagram.com/"><img src="ins.png"></a>
</div>
</body>
</html>