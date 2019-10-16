
<html><head>
<title>Payment</title>
   <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<style>
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size: 1.9rem;
  font-weight: 400;
  line-height: 1;
  color: #1b1b44;
  text-align: left;
  
}
.nav
{
	width:100%;
	background: #000033;
	height: 40px;
	opacity:0.6;
	margin-top:1px;
}
ul{
  	list-style: none;
  	padding: 0;
  	margin:0;
	position:absolute;
	
  }
 .nav a{
	  width: 170px;
	  color: white;
	  display:block;
	  text-decoration:none;
	  font-size: 18px;
	  text-align: center;
	  padding: 10px;
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
	width: 150px;
}
.loginbox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}

               .align{
                    position:absolute;
                    top: 35%;
					bottom: 80px;
                    left: 50px;
                } 
           .box{
			        
                    height: 420px;
                    width: 1250px;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
                    color:black;
                }
               .pad{
                    padding-bottom: 10px;
                    padding-top:  30px;
                    padding-left: 270px;
                    padding-right:10px;
                }
				.jumbotron
				{
					 background-image: url("img/coding.jpg");
                            background-size: cover;
				}
				</style>
</head>
<form enctype="multipart/form-data" action="ups.php" method="POST">

<body>
 <div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbspHome</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us</a></li>
		<li><a href="howphoto.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbspHelp</a></li>
        </ul>
		</div>
		<div class="jumbotron text-center " style="margin-top: 02%; height: 24%; color:white; border-radius: 25px 25px 25px 25px; height: 25%;"><h2>Payment details:</h2></div>
<div class="align"> 
<div class="box"> 
<div class="pad">
	 <br/>
&nbsp;&nbsp;&nbsp; Registration ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="regid">  * given during registration<br><br>  
&nbsp;&nbsp;&nbsp; Photo:  
 <div class="log" style="position:absolute; left:40%; top:25%; height:25px;" ><input type="file" name="photo"></div><br><br>  
  &nbsp;&nbsp;&nbsp;&nbsp;Digital Sign:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <div class="log" style="position:absolute; left:40%; top:37%; height:25px;" > <input type="file" name="sign"></div><br> <br> 
 &nbsp;&nbsp;&nbsp;&nbsp;Adhar no :&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name = "adhar" size="25"  maxlength="12" >*[Maximum 12 digit]<br> <br> 
&nbsp;&nbsp;&nbsp;&nbsp;Bank Branch :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name = "Bank"><br> <br> 
&nbsp;&nbsp;&nbsp;&nbsp;Account no :&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name = "account" size="25"  maxlength="15" >*[Maximum 15 character]<br> <br> 
&nbsp;&nbsp;&nbsp;&nbsp;IFSC Code :&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name = "ifsc" size="25"  maxlength="11" >*[Maximum 11 character]<br> <br> 
 &nbsp;&nbsp;&nbsp;&nbsp;
 <div class="loginbox" style="position:absolute; left:40%; top:106%; height:25px;" ><input type="submit" value="Upload"  onclick="return confirm('Are You Ready to Pay?')">
</div>
</div>
</div>
 </p>
 <font>
 </form>

 </body>
 </html>
 
 <?php
include 'config.php';

$query = 'CREATE TABLE upload( '.
'regid  VARCHAR(10)  NULL, '.
'photo VARCHAR(50) NOT NULL, '.
'sign VARCHAR(30)  NOT NULL, '.
'adhar VARCHAR(30)  NULL, '.
'Bank VARCHAR(30)  NULL, '.
'account VARCHAR(30) NULL, '.
'ifsc VARCHAR(30) NULL)';

$result = mysql_query($query);

?>