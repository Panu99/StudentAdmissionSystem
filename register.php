<html>
<head>

<title>Register</title>
   <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">   
<style>
 .align{
                    position:absolute;
                    top: 20.5%;
					bottom: ;
                    left: 01%;
                } 
.box{
                    height: 205%;
                    width: 125%;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
					
                }
               .pad{
                    padding-bottom: 2%;
                    padding-top: 2%;
                    padding-left: 6%;
                    padding-right:2%;
                }
				body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size: 0.8rem;
  font-weight: 400;
  line-height: 1.5;
  color: #F5FFFA;
  text-align: left;
  
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
  text-align: left;
  color: blue;
}
.nav
{
	width:100%;
	background: #000033;
	height: 36px;
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
	  width: 200px;
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
	a:hover{
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
	color: #F5FFFA;
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
.loginbox input[type="reset"]:hover
{
	background:  #efed40;
	color: #262626;
}
.loginbox table
{
	
	font-weight: bold;
	color: #696969;
}
    .jumbotron{
                            background-image: url("img/register1.jpg");
                            background-size: cover;
                        }

				</style>
</head>

<body>
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbspHome</a></li>
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in" ></span>&nbspLogin</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone" ></span>&nbsp;Contact Us</a></li>
		<li><a href="registerhelp.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;Help</a></li>
        </ul>
		</div>
	   <div class="jumbotron text-center" style="margin-top: 01%; color:white; border-radius: 25px 25px 25px 25px; height: 25%;">
              <font Size="+4" >Register</font>
            </div>
 <div class="align">
 
<div id="logo" style="position:absolute; left:340px; top:80px; width:600px; height:200px;"> 
	 <div class="box">  
     </br>
	</br>
	 <div class="pad">
	 
	<form name="form1" method="post" action="" autocomplete="off">
           
	<div class="loginbox">
	<font size="3" face="verdana" color="Black">
	 
		<table width="90%" border="0">
	
	
			<tr> 
				<td width="27%"><font size="3" face="verdana" color="Black"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbspFirst Name</td>
				<td width="73%"><input type="text" name="firstname" placeholder="Enter first name"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="Black"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbspLast Name</td>
				<td><input type="text" name="lastname" placeholder="Enter Last name"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="Black"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbspEmail</td>
				<td><input type="text" name="email" placeholder="Enter Email"></td>
				
			</tr>
		
			<tr> 
			
				<td><font size="3" face="verdana" color="Black" ><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbspUsername </td>
				<td><input type="text" name="username" value="" placeholder="Enter Username"></td>
				
			</tr>
			</div>
			<tr> 
				<td><font size="3" face="verdana" color="Black"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbspPassword</td>
				<td><input type="password" name="password" placeholder="**********"></td>
			
			</tr>
			
			<tr> 
				<td>&nbsp;</td>
				<td height="126"> <input name="name" type="Reset" value="Reset">&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Submit"></td>
			</tr>
			
			
		</table>
		</div>
		</div>
		</div>
	</form>
	</div>
	</div>
	</div>
</body>
	

<?php

include("config.php");

$query = 'CREATE TABLE login( '.
         'firstname VARCHAR(20) NOT NULL, '.
		 'lastname VARCHAR(20) NOT NULL, '.
         'email VARCHAR(30) NOT NULL, '.
         'username VARCHAR(30) NOT NULL, '.
		 'password VARCHAR(30)NOT NULL, '.
		 'dtime DATETIME NOT NULL, '.
		'regId VARCHAR(10) NOT NULL, '.
		'submission INTEGER )';

$result = mysql_query($query);

if(isset($_POST['submit']))
{   

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
    
	if($user == "" || $pass == "" )
	{
		echo "<br/><font color=red size=4>Please fill up all the details.";
	}
	else
	{  $regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
      // Validate the syntax 
		if(!preg_match($regexp, $email))
		{
			echo "<br/><font color=red size=4> Email address entered is not valid.";
			echo "<br/><font color=red size=4> Please enter a correct email address";
			
		}
		else 
		{
			echo"<font color=blue size=4>";
			$regId=mt_rand(100000000,999999999);
			mysql_query("insert into login(firstname,lastname,email,username,password,regId,dtime) values('$firstname','$lastname','$email','$user','$pass','$regId',now())",$conn)
			or die("Error ! refresh the page or relogin .");
			echo "Your Registration Id is <font color=yellow size=5>  $regId.</font>";
			echo "</br>";
			echo "Please note down your Registration Id.";
			echo "</br>";
		//echo "Registration successfully done now login ";
			echo "<br/>";
			echo "<a href='login.php'></a>";
		}
	}
}
  

?>

</html>
