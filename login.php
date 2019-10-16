
<?php
include("config.php");
Session_Start();

?>

<html>
<head>
<form enctype="multipart/form-data" action="" method="POST">
<title>Login</title>

    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css"> 
  
<style>
	
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size: 2rem;
  font-weight: 400;
  line-height: 1.5;
  color: #1b1b44;
  text-align: left;
  
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
	.nav a:hover{
		background: #669900;
		transition: 0.6s;
		
	}
  li
 {
 	float: left;
    margin-top:0px;
  }

.loginbox p
{
	margin: 0;
    padding: 0;
	font-weight: bold;
	
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
	color:  #00008B;
	font-size: 16px;
}
::placeholder
{
	color: rgba(255,255,255,.5);
}
.loginbox input[type="submit"]
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

.loginbox select[type="role"]
{
	
	background: transparent;
	outline: 20px;
	height: 30px;
	color: #00008B;
	font-size: 16px;
	cursor: pointer;
	border-radius: 20px;
	
}
.loginbox table
{
	
	font-weight: bold;
	color:  #696969;
}


               .align{
                    position: absolute;
                    top: 015%;
                    left: 06.3%;
                } 
           .box{
			        
                    height: 85%;
                    width: 99%;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
                    color:blue;
                }
               .pad{
                    padding-bottom: 3%;
                    padding-top: 6%;
                    padding-left: 2%;
                    padding-right:2%;
                }
				
				</style>
</head>
<body>
<font face="Minion Pro SmBd">
	<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbspHome</a></li>
		<li><a href="register.php"><span class="glyphicon glyphicon-edit"></span>&nbspRigister</a></li>
		<li><a href="statusreg.php"><span class="glyphicon glyphicon-user"></span>&nbspStudent Info</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us </a></li>
       </ul>
		</div>
	  <div class="jumbotron">
	  <div class="container">
		 <b> <font size="5"  color="blue" face="Minion Pro SmBd"><br/><center>LOGIN PAGE.</center>
	<div class="align">
	<div class="box"> 
	<div class="pad">
<div class="loginbox">
<div class="container"> 
<table width="85%" height="93%" border="2" align="center" cellpadding="02" cellspacing="0" bordercolor="#533E11">
	<tr>
		<td width="65%" height="55%"><a href=""><img src="img/clg.jpg" width="650" height="326" /></a></td>
		<td width="434">
		<table align="center">
			<tr>
				<td height="76" align="right" >Loginhere:</strong></td>
			</tr>

			<tr>
				<td height="36" align="right"><span class="glyphicon glyphicon-pencil">Username:</span></strong></td>
				<td align="left"><input type="text" name="username" value="" placeholder="Enter Email"></td>
			</tr>

			<tr>
				<td height="34" align="right"><span class="glyphicon glyphicon-search">Password:</span></strong></td>
				<td align="left"><input type="password" name="password" value="" placeholder="*******"></td>
			</tr>
			
			<tr>
			<td align="right" height="76"></td>
			<td><input type="submit" name="submit" value="login"></td>
			</tr>
			
		</table>
		</div>
</div>
</div>	

		</td>
	</tr>
</table>

 </font>


<?php
$row=0;
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "admin" && $pass == "admin")
	{
		echo "Welcome Admin ";
		
		header('location:Principal.php');
	}
  
	else if($user == "cs" && $pass == "cs")
	{
		header('location:CS Depart.php');
		
	}
	 if($user == "" || $pass == "")
	{
		echo "Either username or password field is empty.";
		
	}
	

	else
	{
		$result = mysql_query("select * from login where username='$user' and password='$pass'",$conn)
		or die("Could not execute the select query no record found .");
		echo"<br/>";
		
			
		$row = mysql_fetch_assoc($result);
	}
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		
		
		if(isset($_SESSION['valid']))
		{
	          header('location:admform.php');
			
		}
		else
		{
	        echo"<br/>";
		    header('location:login.php');
		
		}
	}
	

}
?>

</font>

</div></div></div>
</div>
</div>
<style>
.navbar{
				height: 24px;
                 }
				 </style>
<div class="navbar navbar-inverse navbar-fixed-bottom">
<div class="container">
<div class="navbar-text pull-left ">
<p> <font size="5">Copyright 2018 © RNS software solution.</p>
</div>
</div>
</div>
</body>
</html>
