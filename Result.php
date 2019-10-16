
<?php
session_start();
include("config.php");
mysql_connect('localhost', 'root', '');
mysql_select_db('Student');
$records = mysql_query("select * from login where dtime = (select max(dtime) from login)");
$recordss = mysql_query("select * from educdetails where dtime = (select max(dtime) from educdetails)");
$recordsss = mysql_query("select * from collage_details where dtime = (select max(dtime) from collage_details)");
$recordssss = mysql_query("select * from collage_details where dtime = (select max(dtime) from collage_details)");
?>


<html>
<head>
<title>Result</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<link href="CSSS/display.css" rel="stylesheet" type="text/css">
<script src="jquery.js"></script>
<script src="jquery.PrintArea.js"></script>
<script>
  $(document).ready(function(){
    $("#Print_button1").click(function(){
      var mode='iframe';
       var close=mode=="popup";
       var options={mode:mode,popClose:close};
       $("div.pall").PrintArea(options);
   });
  });
</script>
<style>
<
html {

}
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size:1.6rem;
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
                    top: 10%;
					bottom: 80px;
                    left: 5%;
                } 
           .box{
			        
                    height: 110%;
                    width: 135%;
                    box-sizing: border-box;
                    background: rgba(0,0,0,.1);
                    color:black;
                }
               .pad{
                    padding-bottom: 10px;
                    padding-top:  30px;
                    padding-left: 0%;
                    padding-right:10px;
                }


</style>
</head>

<body>
 

<div class="nav">
	<ul>
		 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbspLog out</a></li>
        </ul>
		</div>
		
    
<div class="align"> 
<div class="box"> 
<div class="pad">
<div class="pall">
	 <div id="logo" style="margin:0;margin-left:0px; position:absolute; left:300px; top:52px; width:100px; height: 150px;"><img src="img/LOGO.BMP"  width="100" height="150" align="left"/></div>
<table width="900" cellpadding="1" cellspacing="1">
	<tr><div style="position:absolute; left:0px; top:42px; width:1290px; height:55px;"><center><strong></STRONG><font Size="5.5" color="black" align="center"> MODERN EDUCATION SOCIETY(R).</strong><br/>
		<font Size="4.5" color="black" align="center">ADMINISTRATIVE OFFICE<br/>
		VIDYANAGAR.SIRSI(N.K)-581 402.
		<br/><br/><br/><strong>ADMISSION CERTIFICATE</strong>
	</font></font></tr></center></div>
</table>
<p>

	<div style="position:absolute; left:300px; top:242px; width:902px; height:55px;"><br/>Kum/Kuma&nbsp;
		<?php

while($login=mysql_fetch_assoc($records))
{

echo " <font size=4> <strong>"; 
echo "<td>".$login['firstname']."</td>";

echo "<td>&nbsp".$login['lastname']."</td></font></strong>";
}

?>
      Is Admission to Dipolma Seat for&nbsp;
	  <?php

            while($collage_details=mysql_fetch_assoc($recordsss))
         {

           echo " <font size=4><strong>"; 
           echo "<td>".$collage_details['Class']."</td></strong>";
         }
?> year   
      		<?php
while($educdetails=mysql_fetch_assoc($recordss))
{

echo " <font size=4>"; 
echo "<td>".$educdetails['course_applied']."</td>.";
}
?> 
<br/>Course in the institute 

<strong>R.N.SHETTY.PLOYTECHNIC SIRSI.</strong> <br/>
under&nbsp;
     		<?php
while($collage_details=mysql_fetch_assoc($recordssss))
{

echo " <font size=4><strong>"; 
echo "<td>".$collage_details['Seat']."</td></strong>";
}
?>&nbsp;
Category through non-intractive counselling. 
in the year 2017/18.
<br/><br/>Admission Is Accepted.

</div> 
<div style="position:absolute; left:300px; top:502px; width:302px; height:55px;">
Signature of Candidate.
</div>
<div style="position:absolute; left:530px; top:502px; width:302px; height:55px;">
Signature Of Parent.
</div>
<div style="position:absolute; left:750px; top:502px; width:302px; height:55px;">
Signature Of Principal.
</div>
</div>
</div>	
</p>
</div>
</div>

</body>
</html>