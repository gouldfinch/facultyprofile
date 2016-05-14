<?php
session_start();
if(!isset($_SESSION['emp_id']))
{
	header('Location: login.php');
}

?>

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
<script type="text/javascript" src="js/jquery.js" ></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>
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

	
#panel, #flip {
    padding: 5px;
    background-color: transparent;
    border: solid 1px transparent;
}

#panel {
    padding: auto;
    display: none;
}

#panel2, #flip2 {
    padding: 5px;
    background-color: transparent;
    border: solid 1px transparent;
}

#panel2 {
    padding: auto;
    display: none;
}

#panel3, #flip3 {
    padding: 5px;
    background-color: transparent;
    border: solid 1px transparent;
}

#panel3 {
    padding: auto;
    display: none;
}

</style>

</head>

<body>

<h2>
Update Your Portfolio
</h2>

<!--  
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
    <option value="CCS">CCS</option>
  </select>
	
  </fieldset>
    
	<br>
<!--	
	<fieldset>
	<legend> Account Security </legend>
	
	
    <label>Password
    <input type="password" class="form-control" name="txtpassword" id="txtpassword" />
    </label>
    <br />
    <br />
    <label>
    <input type="submit" class="btn btn-primary btn-block" name="btnsignup" id="btnsignup" value="Signup" />
    </label>
  
	</fieldset>
-->

<div id="main">
<fieldset>
  
  <legend> Basic Information</legend>
  <br>
  <!--<label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>-->
<!--
  <p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
  -->
  
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM employees WHERE emp_id='".$id."'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
						?>
  <form class="" name="form1" method="post" action="" role="form">
  
  <div class="form-group">
  <label> Last Name: </label>
  <input type="text" class="form-control" value="<?php echo $row["lastname"];?>" name="txtlname" id="txtlname" />
  <label> First Name: </label>
  <input type="text" class="form-control" value="<?php echo $row["firstname"];?>" name="txtfname" id="txtfname" />
  <label> Middle Name: </label>
  <input type="text"  class="form-control" value="<?php echo $row["midname"];?>" name="txtmname" id="txtmname" />
 </div>
 
 <div class="form-group">
  <label> Gender: </label>
  <input type="text"  class="form-control" value="<?php echo $row["gender"];?>" name="txtmname" id="txtmname" />
  <label> Civil Status: </label>
  <input type="text"  class="form-control" value="<?php echo $row["status"];?>" name="txtmname" id="txtmname" />
  <label> Citizenship: </label>
  <input type="text"  class="form-control" value="<?php echo $row["citizenship"];?>" name="txtcitizenship" id="txtcitizenship" />
  <label> Mobile No.: </label>
  <input type="text" class="form-control" value="<?php echo $row["cellno"];?>" name="txtmobile" id="txtmobile" />
  <label> Telephone No.: </label>
  <input type="text" class="form-control" value="<?php echo $row["telno"];?>" name="txttelephone" id="txttelephone" />
  <label> Address: </label>
  <input name="txtaddress" class="form-control" value="<?php echo $row["address"];?>" type="text" id="txtaddress" size="50" />
  <label> Date of Birth: e.g. (01/01/1999) </label>
  <input type="text" class="form-control" value="<?php echo $row["datebirth"];?>" name="txtdob" id="txtdob" />
  </div>
  <div class="form-group">
  <label> Tin No.: </label>
  <input type="text" class="form-control" value="<?php echo $row["tin"];?>" name="txttin" id="txttin" />
  <label> SSS No.: </label>
  <input type="text" class="form-control" value="<?php echo $row["sss"];?>" name="txtsss" id="txtsss" />
  <label> PhilHealth No.: </label>
  <input type="text" class="form-control" value="<?php echo $row["philhealth"];?>" name="txtphilhealth" id="txtphilhealth" />
  </div>
  
  <div class="form-group">
   <label> Employment Status: </label>
   <input type="text" class="form-control" value="<?php echo $row["emp_status"];?>" name="txtempstatus" id="txtempstatus" />
	<!--<select  class="form-control" name="txtempstatus" id="txtempstatus">
	<option value="<?php //echo $row["emp_status"];?>"></option>
	<option value="Full-Time">Full-Time</option>
    <option value="Part-Time">Part-Time</option>
  </select>-->

   <label> Department: </label>
   <input type="text" class="form-control" value="<?php echo $row["dept"];?>" name="txtdept" id="txtdept" />
  <!--<select class="form-control" name="txtdept" id="txtdept">
    <option value="<?php //echo $row["dept"];?>"> </option>
	<option value="CCS">CCS</option>
  </select>-->
</div>
  <?php
	}
	?>	<br>
  <label>
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="UPDATE" />
  </label>
</fieldset>

</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Educational Attainment </legend>
  <br>
  
  <div class="form-group">
  <h4> Post Graduated </h4>
  <table border="3" class="table table-hover">
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM educational WHERE emp_id='".$id."' AND type='PG'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
	?>
	<!-- inside loop -->
	<tr>
		<td rowspan="2"> <?php echo $row["date_grad"]; ?> </td>
		<td align="left"> <?php echo $row["degree"]; ?> <br> 
		<?php echo $row["institution"]; ?></td>
		<td></td>
	</tr>
		
	<tr>
		<td align="right">  <a href="#">EDIT</a> </td>
		<td></td>
	</tr>
	<?php } ?>
	</table>
	<div id="flip"> <p align="right"> + ADD MASTER'S DEGREE </p> </div>
  <hr>
  <div id="panel">
  <label> Institution: </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree: </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <label> Date Graduated: </label>
  <input type="text" class="form-control" name="txt_dategrad" id="txt_dategrad" />

  <br>
  
  <form class="form-inline">
  <div class="form-group">
  <button type="submit" class="btn btn-primary" >CANCEL</button>
  <button type="submit" class="btn btn-primary">ADD</button>
  </div>
  </form>
  </div>
  
  </div>
  
  <hr>
  <div class="form-group">
  <h4> Tertiary </h4>
  <table border="3" class="table table-hover">
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM educational WHERE emp_id='".$id."' AND type='C'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
	?>
	<!-- inside loop -->
	<tr>
		<td rowspan="2"> <?php echo $row["date_grad"]; ?> </td>
		<td align="left"> <?php echo $row["degree"]; ?> <br> 
		<?php echo $row["institution"]; ?></td>
		<td></td>
	</tr>
		
	<tr>
		<td align="right"> <a href="#" >EDIT</a> </td>
		<td></td>
	</tr>
	<?php } ?>
	</table>
	<div id="flip2"> <p align="right"> + ADD BACHELOR'S DEGREE </p> </div>
  <hr>
  <div id="panel2">
  <label> Institution: </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree: </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <label> Date Graduated: </label>
  <input type="text" class="form-control" name="txt_dategrad" id="txt_dategrad" />

  <br>
  
  <form class="form-inline">
  <div class="form-group">
  <button type="submit" class="btn btn-primary">CANCEL</button>
  <button type="submit" class="btn btn-primary">ADD</button>
  </div>
  </form>
  </div>
  <hr>
  <br>
    <div class="form-group">
  <h4> Secondary </h4>
  <table border="3" class="table table-hover">
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM educational WHERE emp_id='".$id."' AND type='HS'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
	?>
	<!-- inside loop -->
	<tr>
		<td rowspan="2"> <?php echo $row["date_grad"]; ?> </td>
		<td align="left"> <?php echo $row["institution"]; ?> <br> 
		<?php //echo $row["institution"]; ?></td>
		<td></td>
	</tr>
		
	<tr>
		<td align="right"> <a href="#" >EDIT</a> </td>
		<td></td>
	</tr>
	<?php } ?>
	</table>
	</div>
	
	<div class="form-group">
  <h4> Elementary </h4>
  <table border="3" class="table table-hover">
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM educational WHERE emp_id='".$id."' AND type='E'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
	?>
	<!-- inside loop -->
	<tr>
		<td rowspan="2"> <?php echo $row["date_grad"]; ?> </td>
		<td align="left"> <?php echo $row["institution"]; ?> <br> 
		<?php //echo $row["institution"]; ?></td>
		<td></td>
	</tr>
		
	<tr>
		<td align="right"> <a href="#" >EDIT</a> </td>
		<td></td>
	</tr>
	<?php } ?>
	</table>
	</div>
	
</fieldset>
</div>

<br>
<div id="main">
<fieldset>
  
  <legend> Professional Eligibility </legend>
  <br>
  <table border="3" class="table table-hover">
  <?php
						
						include('connect.php');
						
						$id = $_SESSION['emp_id'];
						
						$sql = "SELECT * FROM professional WHERE emp_id='".$id."'";
						
						$result=mysql_query($sql);
						
						while($row=mysql_fetch_assoc($result))
						{
						//echo $row["firstname"]." ".substr($row["midname"],0,1).". ".$row["lastname"];
						
	?>
	<tr>
		<td> <?php echo $row["title"]; ?> </td>
		<td> <?php echo $row["license_no"]; ?> </td>
		<td align="right"> <?php echo $row["date_taken"]; ?> </td>
	</tr>
	<?php
	}
	?>
	</table>
	<br>
	<input type="submit" class="btn btn-primary" name="btn_add" id="btn_add" value="UPDATE" />
<br>
	<div id="flip3"> <p align="right"> + ADD ELIGIBILITY </p> </div>
	<hr>
	<div id="panel3">
	<label> Title: </label>
	<input type="text" class="form-control" name="txt_title" id="txt_title" />
	<label> License No.: </label>
	<input type="text" class="form-control" name="txt_license" id="txt_license" />
	<label> Date Granted: </label>
	<input type="text" class="form-control" name="txt_datetaken" id="txt_datetaken" />
	<br>
	<input type="submit" class="btn btn-primary" name="btn_add" id="btn_add" value="ADD" />
	</div>
	
  
</fieldset>
</div>

<br>
<div id="main">
<fieldset>
  
  <legend> Occupational Record </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Professional Eligibility </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Special Skills </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Awards </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Organization Affiliation </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> Professional Eligibility </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<br>
<div id="main">
<fieldset>
  
  <legend> SEMINAR, TRAININGS, AND WORKSHOPS ATTENDED </legend>
  <br>
  <label> Institution </label>
  <input type="text" class="form-control" name="txt_institution" id="txt_institution" />
  <label> Degree </label>
  <input type="text" class="form-control" name="txt_degree" id="txt_degree" />
  <br>
  <label align="right">
  <input type="submit" class="btn btn-primary btn-block" name="btn_add" id="btn_add" value="ADD" /> </label>
</fieldset>
</div>
<?php
  		/*
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
		*/
  ?>
</form>

</body>
</html>
