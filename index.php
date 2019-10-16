<?php

?>
<html>
<head>
	<title>
	Home page
</title>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">   
     <link rel="stylesheet" href="css/font-awesome.min.css">
   <style>
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size: 2.1rem;
  color: #1b1b44;
  text-align: center;
  
}
.nav
{
	width:100%;
	background: #000033;
	height: 40px;
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
	  padding: 07px;
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
*{
	margin:0;
	padding: 0;
	text-decoration: none;

}
.slider{
	overflow: hidden;
	height: 400px;
	width: 100%;
	background-size: cover;
      
}
.slider figure div{
	float: left;
	width: 20%;
	background-size: cover;
}
.slider figure img{
	width: 100%;
	float: left;
	background-size: cover;
}
.slider figure{
	position: relative;
	width: 500%;
	margin: 0px;
	left: 0;
	animation:32s pranav infinite;
	background-size: cover;
}
@keyframes pranav{
	0%{
		left: 0%;
	}
	10%{
         left: 0%;
	}
	12%{
         left: -100%;
	}
	22%{
		 left: -100%;
		 }
	24%{
         left: -200%;
	}
	34%{
		left: -200%;

	}
	36%
	{
        left: -300%;
	}
	46%
	{
		left: -300%;

	}
	48%
	{
       left: -400%;
	}
	58%
	{
      left: -400%;
	}
	60%
	{
       left: -300%;
	}
	70%
	{
	  left: -300%;
	}
	72%{
        left: -200%;
	}
	78%{
        left: -200%;
	}
	82%{
        left: -100%;
	}
	84%{
         left: -100%;
	}
	94%{
         left: -100%;
	}
	96%{
         left: 0%;
	}
}
.navbar{
				height: 24px;
                 }
</style>
</head>
<body>
<div class="nav">
	<ul>
		<li><a href="register.php"><span class="glyphicon glyphicon-edit"></span>&nbspRigister</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbspLogin</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us</a></li>
		<li><a href="About Us.php"><span class="glyphicon glyphicon-user"></span>&nbspAbout us</a></li>
        </ul>
		</div>
<div class="jumbotron text-center" style="margin-top: 01%; height: 20%; border-radius: 25px 25px 25px 25px;">
 <div  style=" position:absolute; left:0px; top:10%; width:100%; height: 50%;">
 <center><font size="6" face="algerian" ></center></font></div> 
 <div  style=" position:absolute; left:0px; top:20%; width:100%; height: 50%;">
     		<center><strong><font size="6" face="algerian" color=" #C71585">THE PROJECT ON STUDENT ADMISSION SYSTEM</strong></font></center></div>
   
	</div>
	

		 <center>
	<div  style=" position:absolute; left:0px; top:30%; width:100%; height: 50%;">	
<table  width="86.5%" height="42%"  border="3" align="center" bordercolor="#533E11">
 <tr>
 <td>
 <div class="slider">
<figure>
	<div class="slide">
		<img src="img/adult.jpg" alt="">
		</div>
		<div class="slide">
		<img src="img/ancient.jpg" width="100%" height="100%">
		</div>
		<div class="slide">
		<img src="img/blur.jpg" width="100%" height="100%">
		</div>
		<div class="slide">
		<img src="img/bind.jpg" width="100%" height="100%">
		</div>
		<div class="slide">
		<img src="img/chairs.jpg" width="100%" height="100%">
		</div>
</figure>

</td>
</tr>
</table>

</div>
</font>
</br></br></br>
<div class="navbar navbar-inverse navbar-fixed-bottom">
<div class="container">
<div class="navbar-text pull-left ">
<p><font size="+2">Copyright 2018 © RIT software solution. </font></p>
</div>
   <div class="navbar-text pull-right ">
<a href="https://m.facebook.com/pranav.hegde.129?refid=7"><i class="fa fa-facebook-f fa-1x" style="color: pink;"></i></i></a>&nbsp
<a href="https://mobile.twitter.com/account"> <i class="fa fa-twitter fa-1x" style="color: pink;"></i></a>&nbsp
<a href="http://whatsapp.com"> <i class="fa fa-whatsapp fa-1x" style="color: pink;"></i></a>&nbsp
<a href="https://www.youtube.com/playlist?list=PL4Tw-Niu0v8ltnN39zsV2p5qQm8TJjzA3"> <i class="fa fa-youtube fa-1x" style="color: pink;"></i></a>
</div>   
</div>
</div>
</div>
</div>
</body>
</html>