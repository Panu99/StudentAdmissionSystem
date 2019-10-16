<?php session_start();
include("config.php");
 ?>

<html>
<head>
<title>About us</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
html {

}
body {
  margin: 0;
  padding: 0;
  background-image: url("img/pen.jpg");
  background-size: cover;
  font-family: Minion Pro SmBd;
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 1.5;
  color: white;
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
	a:hover{
		background: #669900;
		transition: 0.6s;
		
	}
  li
 {
 	float: left;
    margin-top:0px;
  }
  </style>
</head>

<body>
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbsp;Home</a></li>
		<li><a href="register.php"><span class="glyphicon glyphicon-edit" ></span>&nbsp;Rigister</a></li>
        <li><a href='login.php'><span class="glyphicon glyphicon-log-in" ></span>&nbsp;Login</a></li>
        </ul>
		</div>
		
<form>
<div id="logo" style="margin:0;margin-left:100px; position:absolute; left:18%; top:60px; width:52%; height: 300px;"> 
<b> <font size="6" face="Minion Pro SmBd" color="#E0FFFF" ><center> Student Admission System</center></font></b><hr>

<b><p style="margin:0;margin-left:100px; text-align=center;" ><center><font color="white"> The Enroller platform is different from a typical software development scenario. It is especially designed for academic institutes' admission needs and no additional software development is required. Compared to custom software development, moving to Enroller will be cost effective and time saving. Enroller acts as an interface between your institute and applicants. It provides a platform to publish, collect &amp; manage admission forms. Institutes benefit by reducing cost. Applicants benefit by easy and flexible process.</font></b></center><br/>
<center><img src="img/student.jpg" border="3" alt="edu " width="625" height="222" /></center></p>


<p style="margin:0;margin-left:100px;"> <font size="+2" face="Minion Pro SmBd" color="whiteblack"><center>Session to fill  the application form begins once registration is done or Login is done .....</center></font>
</p>
<center> <font size="+1" face="Minion Pro SmBd" color="white">You must be logged in to fill the admission form / check the status of application .</br>
Must fill the Registration Form  </center></font>
</font>
</body>
