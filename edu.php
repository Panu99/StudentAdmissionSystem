

		<html>
		<head>
         <title>education</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
		 <style>
	html {

}
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family: Minion Pro SmBd;
  font-size: 1rem;
  font-weight: 40;
  line-height: 1.5;
  color:#1b1b44;
  
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

.loginbox p
{
	margin: 0;
    padding: 0;
	font-weight: bold;
	
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
	width: 150px;
}
.loginbox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}


               .align{
                    position: absolute;
                    top:10%;
                    left: 03%;
                } 
				.jumbotron
				{
					 background-image: url("img/pc.jpg");
                            background-size: cover;
				}
				</style>
		<body>
	
		<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbspHome</a></li>
		 <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us</a></li>
        <li><a href="eduhelp.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbspHelp</a></li>	
        </ul>
		</div>
	     
		<form name="form3" method="post" action="">
		<div class="jumbotron text-center" style="margin-top: 01%; height: 24%; border-radius: 25px 25px 25px 25px; height: 25%;">
			<font color="black" size="6">Educational Qualification Details </font>
</div>
<center>
<p> 
			<table>
			<tr><td height="30" colspan="6" align="left"  bgcolor="#EEE8AA" class="tableheader"><strong>Fill Here &nbsp;&nbsp;&nbsp;&nbsp;</strong>
			</td><br><br>

                    </tr>

                    <tr>

					<td width="100" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Exams</center></strong></td>

                    <td width="100" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Exams Passed</center></strong></td>

                    

					<td width="100" nowrap="nowrap" bgcolor="#F5F5F5" class="tablecontent2" align="center"><strong><center>University / Board</center></strong></td>

                    <td width="100" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Year of Passing</center></strong></td>

                    <td width="100" align="center"  bgcolor="#F5F5F5" class="tablecontent2" colspan=""><strong><center>% of Marks</center></strong></td>

					</tr>


		<br><br>
<tr>
        
		<td  height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent1">Secandory</td></font>

		<td><center>
		<input type=text name="sslc_xam" id=sslc_xam size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
		
		

		<td><center>
		<input type=text name="sslcuniv" id=university1 size=51 maxlength=50 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td><center>
		<input type=text name="sslcyop" id=selresult1 size=31 maxlength=30  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"> </center></td>

		<td><center>
		<input class=textbox2_2 maxlength=2 size=15  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" name="sslc_marks" id=selmark1 /> </center></td>
		</tr>
		
		
		<tr align=left>
		<td height="20" align="center"  bgcolor="#F5F5F5" class="PUC">PUC</td>
		<td class="PUC">
		<select class=listMenu name="puc_xam" id=seldegree2 size=01>
		<option value="">Select  </option>
		<option value='PCMC'>Puc-Science</option>
		<option value='PCMB'>Puc-commerce</option>
		<option value='PCME'>Puc-Arts</option>
		<option value='Other'>Other</option>
		</select>  

		</td>    

		

		<td class=PUC><center>
		<input type=text name="pucuniv"  id=university2 size=51 maxlength=50 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=PUC><center>
		<input type=text name="pucyop" id=selresult2 size=31 maxlength=50 onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"></center></td>

		<td class=PUC><center>
		<input class=textbox2_2 onkeypress="return number(event);" maxlength=50 size=15 name="pucmarks" id=selmark2 /> 

		</center></td>
		</tr>
		</center></table>
		<table>
		<tr>
		<td height="20" align="center"   class="tablecontent1">SSLC_Science*marks<span class="alert"><font color=red>*</span></td></font>

		<td class=tablecontent1><center>
		<input type=text name="sslc_Science" id=sslc_Science size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
		</tr>
		<tr>
		<td height="20" align="center" class="tablecontent1">SSLC_Maths*marks<span class="alert"><font color=red>*</span></td></font>

		<td class=tablecontent1><center>
		<input type=text name="sslc_Maths" id=sslc_Maths size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
		</tr>
		<br><br>
		<tr>
       <center>
      <td class="tablecontent1">Course Applied For<font color=red> *</font></td>

      <td class="tablecontent1">

		<select size=1 name="course_applied"   class="listMenu">

        <option selected value=''>Select

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>

        <option value='Diploma(CS)'>Diploma(CS)</option>

        <option value='Diploma(EC)'>Diploma(EC)</option>

        <option value='Diploma(EE)'>Diploma(EE)</option>

        <option value='Diploma(MECH)'>Diploma(MECH)</option>

        <option value='Diploma(CIVIL)'>Diploma(CIVIL)</option>
		<option value='OTHER'>Other</option>

	</select></td>
    </tr></table>
	<br><br>
	<div class="loginbox"> 
	<input type="submit" value="Submit" name="submit"  onclick="return confirm('Are You Sure To Submit?')" />
</div>
</div>
</div>
</div>
</font>
</p>
	</body>
	
<br>


		
	</form>
	</html>
	<?php
	include ("config.php");

	$query = 'CREATE TABLE educdetails( '.
	      
         'sslc_xam VARCHAR(30) ,'.
         'sslc_univ VARCHAR(20) , '.
         'sslc_yop INT(5) , '.
         'sslc_marks INT(6),'.
		 'puc_xam VARCHAR(30) ,'.
         'puc_univ VARCHAR(20) , '.
         'puc_yop INT(5) , '.
         'puc_marks FLOAT(6),'.
		 'sslc_Science INT(6),'.
		 'sslc_Maths INT(6), '.
		 'dtime DATETIME NOT NULL, '.
		 'course_applied VARCHAR(20) )';
            
	$result = mysql_query($query);

    

	if(isset($_POST['submit']))

	{  
	$sslc_xam = $_POST['sslc_xam'];
	$sslc_univ = $_POST['sslcuniv'];
	$sslc_yop = $_POST['sslcyop'];
	$sslc_marks = $_POST['sslc_marks'];
	$puc_xam = $_POST['puc_xam'];
	$puc_univ = $_POST['pucuniv'];
	$puc_yop = $_POST['pucyop'];
	$puc_marks = $_POST['pucmarks'];
	$sslc_Science = $_POST['sslc_Science'];
    $sslc_Maths = $_POST['sslc_Maths'];
	$course_applied = $_POST['course_applied'];
	
    if ($sslc_xam == "" ||$sslc_univ == ""  || $sslc_yop == ""  || $sslc_marks ==""  || $course_applied == "")
  
		{ 
		echo"<center>";
		echo"<font color=red size=+1>";
		echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
	else
		{
		mysql_query("insert into educdetails(sslc_xam,sslc_univ,sslc_yop,sslc_marks,puc_xam,puc_univ,puc_yop,puc_marks,sslc_Science,sslc_Maths,course_applied,dtime) 
		values('$sslc_xam','$sslc_univ','$sslc_yop','$sslc_marks','$puc_xam','$puc_univ','$puc_yop','$puc_marks','$sslc_Science','$sslc_Maths','$course_applied',now())",$conn)
		or die("Error ! refresh the page or relogin .");
		
		
		echo "<font color=black size=+1> Education Details Submitted  ";
	    echo "<br/><a href='Upload.php'><font color=blue size=+1>Click to Proceed </a>";
		
	}
	}
	?>




    