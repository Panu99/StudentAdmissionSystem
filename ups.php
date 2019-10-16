
<html>

<head>
<title> upload</title>
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
  font-size: 1.7rem;
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
	.nav a:hover{
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

<body bgcolor="#DBBF9A">
 <font face="Minion Pro SmBd">
 <div class="nav">
	<ul>
		<li><a href="Home.php"><span class="glyphicon glyphicon-home" ></span>&nbspHome</a></li>
		<li><a href="Up.php"><span class="glyphicon glyphicon-arrow-left"></span>&nbspBack</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone" ></span>&nbspContact Us</a></li>
		
		</ul>
		</div>
		
<?php 

 //This is the directory where images will be saved 
 $target = "images/"; 
 $ttt = "text/";
 $target = $target . basename( $_FILES['photo']['name']);
 $ttt = $ttt . basename( $_POST['ifsc']);
 $photo= 0;
 $sign=0;
 $adhar=0;
 $Bank=0;
 $account=0;
 $ifsc=0;
 //This gets all the other information from the form 

//
 $code=mt_rand();
  $regid = $_POST['regid'];
 $pic=($_FILES['photo']['name']); 
 $sign=($_FILES['sign']['name']);
 $adhar=$_POST['adhar']; 
 $Bank=$_POST['Bank'];
 $account=$_POST['account'];
 $ifsc=$_POST['ifsc'];
 // Connects to your Database 
 mysql_connect("localhost","root","") or die(mysql_error()) ; 
 mysql_select_db("Student") or die(mysql_error()) ; 

 //Writes the information to the database 
 mysql_query("INSERT INTO `upload` VALUES ('$regid','$pic','$sign','$adhar','$Bank','$account','$ifsc')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded successfully"; 
 echo"<br>";
 $photo=1;
 }  
 else { 

 //Gives and error if its not 
 echo "Sorry, there was a problem uploading the PHOTO file."; 
 echo"<br>";
 } 
 if(move_uploaded_file($_FILES['sign']['tmp_name'], $target))
 { 
 $sign=1;
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['sign']['name']). " has been uploaded succesfully"; 
 echo"<br>";
 }  
else
 { 

 //Gives and error if its not 
 echo "Sorry, there was a problem uploading the scanned digital signature  file."; 
 echo"<br>";
 } 

  if ($photo==1 && $sign==1){
 echo"DATA Uploaded check the profile page for further info and reference ";
 echo"&nbsp;&nbsp;";
 
 }
 
  else {
  Echo"<br>";
  echo " must upload file for application to be submited ";
  }
   if(preg_match("([A-Z]{4}[0-9]{4}[0-9]{3})",$ifsc))
	{
		Echo"<br>";
		print(" Your IFSC is Valid");
		Echo"<br>";
		echo"<a href= 'Result.php'>Click to Adimission Certificate </a>";
	}
else
{
	print("<font color=red>Sorry the IFSC is Invalid");
}
  
   $sql="UPDATE login SET submission='1' WHERE (regId = $regid)";

       if (!mysql_query($sql))

  {

        die('Error: ' . mysql_error());

  }
  
  

 ?> 
 </font>
 </body>

</html>
