<!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cssExternal.css">
	<!-- Fav icon -->
	<link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="FomrMain">

	<nav class="navbar navbar-expand-sm  HomeNav" style="background-color: black;">
		<a href="HomePage.php" class="navbar-brand">
			<a href="HomePage.php"> <img src="bgImage/Loginlogo.png" height="85px" width="220px"></a>
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#listCollapse"
			style="background-color: #343a40;height: 40px;"><span style="color: white;"><i
					class="fa fa-bars"></i>Menu</span>
		</button>&nbsp &nbsp
		<div id="listCollapse" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto" id="nav-ul">
				<li class="nav-item "> <a href="HomePage.php" class="nav-link LoginNav" id="nav-li-a"
						style="color: rgb(236, 159, 104);"><span class="LoginHome"><i class="fa fa-home"></i>
							Home</span></a> </li>
				<li class="nav-item"> <a href="#" class="nav-link" id="nav-li-a" style="color:cornsilk;"><i
							class="fa fa-user"></i>
						Login</a> </li>
				<li class="nav-item"> <a href="About us.html" class="nav-link LoginNav" id="nav-li-a"
						style="color: rgb(236, 159, 104);"><span class="LoginHome"><i class="fa fa-university"></i>
							About Us</span></a> </li>
				<li class="nav-item"> <a href="RegisNew.php" class="nav-link LoginNav" id="nav-li-a"
						style="color: rgb(236, 159, 104);"><span class="LoginHome"><i class="fa fa-registered"></i>
							Registration</span></a> </li>
				<li class="nav-item"> <a href="Help.html" class="nav-link LoginNav" id="nav-li-a"
						style="color: rgb(236, 159, 104);">
						<span class="LoginHome"><i class="fa fa-question"></i>
							Help</span>
					</a> </li>
			</ul>
		</div>
	</nav>
	<div>
		<a href="Login.php"><span style="font-size:30px;margin-left:1400px;font-weight:bold;color:white;margin-top:40px;">For Admin </span></a>
	</div>
	<div class="FormDiv">

		<img src="bgImage/user.png" width="100px" height="100px" class="user">
		<h1 class="here">Log In Here</h1>
		<form method="post" class="Form" name="login" onsubmit="valid()" action="loginServer.php">
			<p>User Name</p>
			<input type="text" id="username" name="uname" placeholder="Enter User name" onclick="ONClICK(this)"
				style="border-radius: 2px;padding-left:8px;" required>
			<p>Password</p>
			<input type="password" id="password" name="password" placeholder="Enter your password" required
				onclick="ONClICK(this)" style="border-radius: 2px;padding-left:8px;">
			<input type="submit" id="button" value="Login" name="submit"></input>
			<center> <a href="#" class="anchor">Forgot Password</a><br>
				<span style="color:white"> OR</span><br>
				<a href="RegisNew.php" class="anchor">Create New Account</a>
			</center>
		</form>
		<div id="formId"></div>
	</div>
	<!-------------------------------------------------Javascript implementation--------------------------------------->
	<script type="text/javascript">
		function valid() {
			var uname = document.getElementById("username").value;
			var pwd = document.getElementById("password").value;
			if (pwd.trim() == "" || uname.trim() == "") {
				alert("No blank spaces allow.");
			}
		}

		function ONClICK(ele) {
			ele.style.background = "darkseagreen";
			ele.style.color = "black";
			ele.style.borderColor = "yellow";
			ele.style.borderRadius = "4px";
		}
	</script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>