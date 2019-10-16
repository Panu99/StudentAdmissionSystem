<?php session_start(); ?>
<html>
<head>

<title>Student Info</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<style>
	html {

}
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: sans-serif;
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 1.5;
  color: #1b1b44;
  text-align: Right;
  
}
   
.nav
{
	width:100%;
	background: #000033;
	height:36px;
	opacity:0.6;
	margin-top:0px;
}
ul{
  	list-style: none;
  	padding: 0;
  	margin:0;
	position:absolute;
	
  }
 .nav a{
	  width: 150px;
	  color: white;
	  display:block;
	  text-decoration:none;
	  font-size: 18px;
	  text-align: center;
	  padding: 04px;
	  border-radius: 04px;
	  font-family: Verdana;
	  font-weight: bold;
	}
.nav	a:hover{
		background: #669900;
		transition: 0.6s;
		
	}
  li
 {
 	float: left;
    margin-top:0px;
  }

.loginbox input
{
	width: 100%;
	margine_bottom: 20px;
}
.loginbox input[type="text"],
.loginbox input[type="password"]

{
	border: none;
	border-bottom: 1px solid #556B2F;
	background: transparent;
	outline: none;
	height: 40px;
	color: black;
	font-size: 16px;
}
.loginbox input[type="submit"],
.loginbox input[type="reset"]
{
	border: none;
	outline: none;
	height: 30px;
	color: #00008B;
	font-size: 16px;
	background: #ff267e;
	cursor: pointer;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}

              
               .align{
                    position:absolute;
                    top: 25%;
					bottom: 10%;
                    left: 15%;
                } 
           .box{
			        
                    height: 100%;
                    width: 120%;
                    border-radius: 20px 20px 20px 20px;
                    background: rgba(0,0,0,.1);
                    color:black;
					background-image: url("img/agree.jpg");
                    background-size: cover;
                }
               .pad{
                    padding-bottom: 10px;
                    padding-top:  60px;
                    padding-left: 30px;
                    padding-right:10px;
                }
				.jumbotron{
                            background: grey;
                            background-size: cover;
                        }
				
				</style>
</head>

<body>
<body bgcolor="#FFFFFF">
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbspHome</a></li>
		<li><a href="Login.php"><span class="glyphicon glyphicon-log-in" ></span>&nbspLogin</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone" ></span>&nbspContact Us</a></li>
        </ul>
		</div>
		 <div class="jumbotron text-center" style="margin-top: 1%; height: 15%; border-radius: 25px 25px 25px 25px;">
               <font color="white" size="6" face="Minion Pro SmBd"> STUDENT INFO.</div>
<div class="align"> 
<div class="box"> 
<div class="pad">

	<p class="tab" style="margin:0;margin-left:475px;width:300px;"> <font size="+2"></font>
	 <br/>
	 <div class="loginbox">
	<form name="formlog" method="post" action="" autocomplete="off" >
           
                
           
		<table width="75%" border="0">
		
			<table align="center">
			<tr> 
			<table align="center" >
				<td> <h4>Student Name:</h4></td>
				<td><input type="text" name="std_name" value=""></td>
			</tr></table>
	<table align="center">
				<td><h4>Registration ID:</h4></td>
				<td><input type="text" name="registration" value=""></td>
			</tr></table>
			<table align="center">
			<tr> 
			
		     <td width="57" height="60"></td>
				<td width="73%"><input type="submit" name="submit" value="Submit"  onclick="return confirm('Are You Sure To Submit?')"></td>
			
			</tr>
			</table >
		</table>
		</div>
	</form>
<br>
</font>
</p>

</div>
<?php

include("config.php");


if(isset($_POST['submit']))
{
	$regId = $_POST['registration'];
	//$pass = $_POST['password'];

	if($regId == "" )
	{
		echo "<font color=red align=center size=3><strong><center>Please fill up the registration ID field to check the status";
		
		
	}
	else
	{
		$result = mysql_query("select * from login where regId='$regId'",$conn)
		or die("Sorry no database found");
		
		$row = mysql_fetch_assoc($result);
		
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['regId'];
			$_SESSION['valid'] = $validuser;
			
			if(isset($_SESSION['valid']))
		{  
             header('location:profile.php');
		}
		else
			{
				echo "<center>Your application is in the process of submission";
				echo "</br>";
				echo "<center>You will be notified about the submission soon";
			}
			
			
			
		}
		else
		
		{ echo"<br/>";
		  
			echo " <font color=red> <center>Wrong registration ID!! Enter correct registration ID";
			echo "</br>";
			echo "<a href='statusreg.php'><font color=red size=+2><strong><center> Retype  </a>";
		  

		
		}

		
	}
}



?>
</div></div></div>
</body>
</html>