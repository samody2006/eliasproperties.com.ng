<!DOCTYPE html>
<html lang="en">
<head>
	<title>Elias Properties</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>


		<form method="post">
		<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Admin Login Area</h3>
		<div class="login">
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login Here"></td>
					</tr>
		</div>
		<div class="shadow"></div>
		</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

<!-- 	<footer>
		<div class="wrapper footer">
				<?php
			// include 'footer.php';
		?>
	</footer>  end footer  -->
	
</body>
</html>