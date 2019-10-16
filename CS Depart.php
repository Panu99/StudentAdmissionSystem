
<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('Student');
$sql="SELECT * FROM collage_Details WHERE Course='cs'";
$records=mysql_query($sql);

?>


<html>
<head>
<title>CS Department Details</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">   
<style>
	html {

}
body 
{
  margin: 0;
  padding: 0;
  background-image: url("img/Cs Department.jpg");
  background-size: cover;
  font-family: Minion Pro SmBd;
  font-size: 1rem;
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
                    left: 150px;
                } 
           .box{
			        
                    height: 495px;
                    width: 243%;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
                    color:black;
                }
               .pad{
                    padding-bottom: 10px;
                    padding-top: 48px;
                    padding-left: 0px;
                    padding-right:10px;
                }
                table th, td{
                	width: 10%;
                	margin: auto;
                	border: 1px solid white;
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
<body>
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbsp;Home</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone" ></span>&nbsp;Contact Us</a></li>
		 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a></li>
        </ul>
		</div>
				     <div class="align"> 
		<div class="box"> 
	<div class="pad">
		<br/><br/><br/>
		 <font size="6"  color="Yellow" face="Minion Pro SmBd"><center> Computer Science Department.</center>
</p>
<p style="margin:0;margin-left:0px;width:00px; margin-top: 40px;">
<table width="1000" border="2" cellpadding="3" cellspacing="3">
<tr>
<th><center>Name</th>
<th><center>Institution</th>
<th><center>Code</th>
<th><center>Course</th>
<th><center>category</th>
<th><center>Seat</th>
<th><center>Class</th>
</tr>
<?php

while($collage_Details=mysql_fetch_assoc($records))
{
  ?>
<tr> 
<td align='center'><?php echo $collage_Details['Name'] ?></td>

<td align='center'><?php echo $collage_Details['Institution']?></td>

<td align='center'><?php echo $collage_Details['Code']?></td>

<td align='center'><?php echo $collage_Details['Course']?></td>

<td align='center'><?php echo $collage_Details['category']?></td>

<td align='center'><?php echo $collage_Details['Seat']?></td>

<td align='center'><?php echo $collage_Details['Class']?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>