<?php
$host="localhost";
$user="root";
$pass="";
$dname="webdev";

$con=mysqli_connect($host,$user,$pass,$dname);

if (!$con) {
	echo "Sorry";
}

if(!empty($_POST)){
	$sms=$_POST['comment'];
	$email=$_POST['email'];

	$insert="INSERT INTO dataf (sms, email)
	VALUES ('$sms','$email')";

	if(mysqli_query($con, $insert)){
			echo "done";
		}
	}
	

?>

<!DOCTYPE>
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
		
		.title{
			text-align: center;
			padding: 50px;
		}
		.cover01{
		height:700px;
		width:1250px;
		background-color:#fff;
		border-radius:25px;
		border: 10px solid #000;

		}
		.text01{
			font-size: 30px;
			color: #000;
			text-align: left;
			padding: 20px;
			margin-top: 20px;
			padding-left: 300px;
			margin-top: 90px;
			font-style: oblique

		}
		.text02{
			font-size: 30px;
			color: #000;
			text-align: left;
			padding: 20px;
			margin-top: 20px;
			padding-left: 300px;
			font-style: oblique


		}
		.text03{
			font-size: 30px;
			color: #000;
			text-align: left;
			padding: 20px;
			margin-top: 20px;
			padding-left: 300px;
			font-style: oblique


		}
		.text04{
			font-size: 30px;
			color: #000;
			text-align: left;
			padding: 20px;
			margin-top: 20px;
			padding-left: 300px;
			font-style: oblique


		}
		.text05{
			font-size: 30px;
			color: #000;
			text-align: left;
			padding: 20px;
			margin-top: 20px;
			padding-left: 300px;
			font-style: oblique;
		}
		.cover02{
			height: 400px;
			width: 1250px;
			background-color: #fff;
			margin: 0 auto;
			margin-top:40px;
			border-radius: 17px;
			border-radius:25px;
			border: 7px solid #000;



	}
		.foot01 h3{
			padding-top: 50px;
			padding-bottom: 20px;
			color: #000;
			padding-left: 120px;
	}
		form{
			padding: 0 110px;
			margin: 0;
	}
		form .submit{
			text-align: center;

	}
		form .submit input{
			width: 50%;
			background-color: #ccc;
			height: 50px;
			border-radius: 7px;
	} 
		table td{
			margin-left: 5px;
			padding-left: 5px;
			padding-bottom: 15px;
			font-family: sans-serif;
			color: #000;
	}

		textarea.form-control {
    		height: 100px;
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
<div>
	<img src="pagani2.jpg">
</div>
<div>
	<h1 class="title">Pagani Zonder HP Barchetta</h1>
</div>
<div class="cover01">
	
	<pre class="text01">Speed : 221 mph</pre>
	<pre class="text02">Engine : 7.3 L (445 cu in) Mercedes-Benz V12</pre>
	<pre class="text03">Horse power : 789 hp</pre>
	<pre class="text04">RPM : 6900</pre>
	<pre class="text05">weight : 1250 kg</pre>


</div>
		<div class="cover02">
			<div class="foot01">
				<h3>Give a feedback</h3>

					<div class="form01">
						<form action="" method="post">
							<table>
								<tr>
									<td>
										Comment:
									</td>
									<td>
										<textarea name="comment" id="" cols="100" rows="10" name="comment"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										Email:
									</td>
									<td>
										<input type="text" name="email" size="80">
									</td>
								</tr>
							</table>
							<div class="submit">
                                        
                                    <input type="submit" value="SUBMIT">
                                    
                                </div>
						</form>
					</div>
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