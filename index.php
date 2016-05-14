<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title> NCF - Faculty Profiler </title>
	<link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap.css" />
	<script type="text/javascript" href="js/bootstrap.min.js" ></script>
	<style>
	#main {
	margin: auto;
	padding: 20px;
	border: 1px dotted white;
	width: 90%;
	background-color: white;
	}
	h2 {
	margin-top: 140px;
	font-family: 'Segoe UI';
	font-size: 30px;
	text-align: center;
	}
	body {
	background-color: #d3d3d3;
	}
	a {
	text-decoration: none;
	font-family: 'Segoe UI';
	}
	a:hover {
	text-decoration: none;
	color: black;
	}
	</style>
</head>
<body>
<h2>
FACULTY PROFILER
</h2>
<div id="main">
	<form name="login" action="login.php" method="post" role="form">
	
	<br> <input type="text" class="form-control" placeholder="Enter Employees ID No." name="emp_id"/> <br>
	<input type="password" class="form-control" placeholder="Enter Password" name="password"/> <br>
	<input type="submit" class="btn btn-primary btn-block" name="btnlogin">
	<br>
	<a href="signup.php">SIGN UP HERE!</a>
	<a href="dept_login.php">DEPARTMENT</a>
	</form>
</div>
</body>
</html>