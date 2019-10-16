

<html>
<head>
<title>PROFILE PAGE </title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<link href="CSSS/profile.css" rel="stylesheet" type="text/css">
<style>
	html {

}
body 
{
  margin: 0;
  padding: 0;
   background-image: url("img/apple.jpg");
    background-size: cover;
  font-family: sans-serif;
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
	a:hover{
		background: #669900;
		transition: 0.6s;
		
	}
  li
 {
 	float: left;
    margin-top:0px;
  }


               .align{
                    position:absolute;
                    top: 75px;
					bottom: 80px;
                    left: 160px;
                } 
           .box{
			        
                    height: 505px;
                    width: 1000px;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
                    color:black;
                }
               .pad{
                    padding-bottom: 10px;
                    padding-top: 48px;
                    padding-left: 20px;
                    padding-right:10px;
                }
				table th, td{
                	width: 20%;
                	margin: auto;
                	border: 1px solid black;
                	border-collapse: collapse;
                	text-align: 30px;
                	table-layout: fixed;
                	background: white;
                	opacity: 0.5;
                	color: black;
                	margin-top: 100px;
                }
                th,td{
                	padding: 2px;
                	opacity: 0.8;
                }
				</style>
</head>

<body bgcolor="#DBBF9A">
<font face="Minion Pro SmBd">
 <div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbsp;Home</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone" ></span>&nbsp;Contact Us</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" ></span>&nbsp;Logout</a></li>
		</ul>
		</div>
		<div class="align"> 
<div class="box"> 
	<div class="pad">
<form name="form2" method="" action="" autocomplete="off">
            
<center> <b><font color="white" size="5"> PROFILE PAGE </font></b>
<br><br>


<?php 
session_start();
include("config.php");

 if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
" &nbsp;&nbsp;&nbsp;! ";
" &nbsp;&nbsp;&nbsp;! ";
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<font size=3><strong>Welcome reg I D &nbsp;&nbsp;<font size=5 color=yellow><strong>".$_SESSION['valid']. "&nbsp;&nbsp;&nbsp; ";
	
	
	
		$result2 = mysql_query("select * from login where regId=".$_SESSION['valid']. " ",$conn);
	    echo"<br><br><br>";
		
		echo "<table border='2'>
	
<tr>

<td><center>Firstname</td>
<td><center>Lastname</td>
<td><center>Email-Id</td>
<td><center>Username</td>

<td><center>Date&Time</td>
<td><center>RegistrationID</td>
<td><center>Submission</td>
</tr>";
	while($row = mysql_fetch_assoc($result2))
	{
		 echo "<tr>";
		
  echo "<td><center>" . $row['firstname'] . "</td>";
  echo "<td><center>" . $row['lastname'] . "</td>";
  echo "<td><center>" . $row['email'] . "</td>";
  echo "<td><center>" . $row['username'] . "</td>";  
  echo "<td><center>" . $row['dtime'] . "</td>";  
  echo "<td><center>" . $row['regId'] . "</td>";  
  echo "<td><center>" . $row['submission'] . "</td>";  
       
  
  
  echo "</tr>";
	}
	echo "</table>";
}


 

?>
</div>
</div>
</div>
</form>

		</font>
		</body>
</html>