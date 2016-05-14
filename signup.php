<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Untitled Document</title>

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
	margin-top: 60px;
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
Sign-up 
</h2>
<div id="main">
<form id="form1" name="form1" method="post" action="" role="form">
  
  <fieldset>
  
  <legend> Personal Info </legend>
  
  <input type="text" class="form-control" placeholder="Enter Employees ID No.:" name="txtemp_id" id="txtemp_id" />
  <br>
  <input type="text" class="form-control" placeholder="Enter Last Name:" name="txtlname" id="txtlname" />
  <br>
  <input type="text" class="form-control" placeholder="Enter First Name:" name="txtfname" id="txtfname" />
  <br>
  <input type="text"  class="form-control" placeholder="Enter Middle name:" name="txtmname" id="txtmname" />
 
  <br>
  <label> Gender: </label>
   <select class="form-control" name="selgen" id="selgen">
    <option value="M" selected="selected">Male</option>
    <option value="F">Female</option>
  </select>
  <br>
   <label> Civil Status: </label>
  <select class="form-control" name="selstatus" id="selstatus">
    <option value="Single">Single</option>
    <option value="Married">Married</option>
    <option value="Widowed">Widowed</option>
  </select>
  <br>
  <input type="text"  class="form-control" placeholder="Enter Citizenship:" name="txtcitizenship" id="txtcitizenship" />
  <br>
  <input type="text" class="form-control" placeholder="Enter Mobile No.:" name="txtmobile" id="txtmobile" />
  <br>
  <input type="text" class="form-control" placeholder="Enter Telephone No.:" name="txttelephone" id="txttelephone" />
  <br>
  <input name="txtaddress" class="form-control" placeholder="Enter Address:" type="text" id="txtaddress" size="50" />
  <br>
  <input type="text" class="form-control" placeholder="Enter Date of Birth (01/01/1999):" name="txtdob" id="txtdob" />
  <br>
  <input type="text" class="form-control" placeholder="Enter Tin No.:" name="txttin" id="txttin" />
  <br>
  <input type="text" class="form-control" placeholder="Enter SSS No.:" name="txtsss" id="txtsss" />
  <br>
  <input type="text" class="form-control" placeholder="Enter PhilHealth No.:" name="txtphilhealth" id="txtphilhealth" />
  <br>
   <label> Employment Status: </label>
	<select class="form-control" name="txtempstatus" id="txtempstatus">
    <option value="Full-Time">Full-Time</option>
    <option value="Part-Time">Part-Time</option>
  </select>
  <br>
   <label> Department: </label>
  <select class="form-control" name="txtdept" id="txtdept">
    <option value="College of Computer Studies">CCS</option>
  </select>
	
  </fieldset>
    
	<br>
	
	<fieldset>
	<legend> Account Security </legend>
	
	
    <label>Password
    <input type="password" class="form-control" name="txtpassword" id="txtpassword" />
    </label>
    <br />
    <br />

	<form class="form-inline">
	 <button class="btn btn-primary"> <a href="index.php" > Cancel </a> </button> 
    <input type="submit" class="btn btn-primary" name="btnsignup" id="btnsignup" value="Signup" />
    </form>

  
	</fieldset>
  
  </div>
  <?php
  		
		if(isset($_POST['btnsignup']))
		{
			require ("connect.php");
			
			$emp_id = $_POST['txtemp_id'];
			$lname = $_POST['txtlname'];
			$fname = $_POST['txtfname'];
			$mname = $_POST['txtmname'];
			$gender = $_POST['selgen'];
			$citizenship = $_POST['txtcitizenship'];
			$address = $_POST['txtaddress'];
			$dob = $_POST['txtdob'];
			$tin = $_POST['txttin'];
			$sss = $_POST['txtsss'];
			$philhealth = $_POST['txtphilhealth'];
			$emp_status = $_POST['txtempstatus'];
			$pass = $_POST['txtpassword'];
			$cellno = $_POST['txtmobile'];
			$telno = $_POST['txttelephone'];
			$dept = $_POST['txtdept'];
			$status = $_POST['selstatus'];
			
			if($emp_id != null AND $lname != null AND $fname != null AND $mname != null AND $gender != null AND $citizenship != null AND $address != null AND $dob != null AND $tin != null AND $sss != null AND $philhealth != null AND $emp_status != null AND $pass != null AND $cellno != null AND $telno != null)
			{
				$query = "INSERT INTO employees(emp_id, lastname, firstname, midname, gender, citizenship, address, datebirth, tin, sss, philhealth, emp_status, passwrd, cellno, telno, dept,status) VALUES ('$emp_id','$lname','$fname','$mname','$gender','$citizenship','$address','$dob','$tin','$sss','$philhealth','$emp_status','$pass','$cellno','$telno','$dept','$status')";
				$sql = "SELECT emp_id FROM employees WHERE emp_id = '$emp_id'";
				$result = mysql_query($sql);
				$count = mysql_num_rows($result);
				$row = mysql_fetch_array($result);
				if($count == 0)
				{
					if(!mysql_query($query))
					{
						die('Error: ' . mysql_error());
					}
					echo '<script language = "JavaScript"> alert ("Successfully Registered!") </script>';
					header('Location: index.php');
				}
			}
			else
			{
				echo '<script language = "JavaScript"> alert ("Please fill up all fields.") </script>';
				//header('Location: signup.php');
			}
			
		}
  ?>
</form>

</body>
</html>
