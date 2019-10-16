

<html>
<head>
<title>Upload </title>
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
  font-size: 1.5rem;
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
.jumbotron
				{
					 background-image: url("img/book.jpg");
                            background-size: cover;
				}
				</style>
</head>

<center>
<body>
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home" ></span>&nbspHome</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us</a></li>
		<li><a href="Uploadhelp.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbspHelp</a></li>
        </ul>
		</div>
	     
<br/>
<form  name="Upload_details"  method="post"   autocomplete="on" >
<body>
<div class="jumbotron " style="margin-top: 0%; height: 24%; border-radius: 25px 25px 25px 25px; height: 25%;">
<font size="6"  color="white" face="Minion Pro SmBd">Collage Details</font></div>
	<div class="align" style="Margin_top=200px;""></div>
<table cellspacing=1 width=1054px id=AutoNumber2  style='border-collapse: collapse'>
<tr bordercolor=#EEE8AA>

     <td colspan=2 bgcolor=white bordercolor="#EEE8AA" align=Left>
	 <font color=#800080 Size=+2>
	 <Strong> Fields: </font> 

</tr>

<tr>

     <td colspan=2 bgcolor=#EEE8AA bordercolor=white align=center></td>

</tr>
<tr>
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Name Of Candidate <font color=#800080 >[as in Secondary School Certificate]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
		
	<input type=text name="Name" size=40 maxlength=40 id=firstname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)"> <br/>
    </td></tr>
	        <tr>
                <td class="tablecontent1"><p>&nbsp;&nbsp;&nbsp;&nbsp Name Of Institution  <span class="alert"><font color=red>*</font></span></p></td>
              <td> <input type=text name="Institution" size=40 maxlength=40 id=firstname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)"> <br/>
			  </td> </tr>
<tr>
                <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Collage Code 
 </td>
                <td colspan="3" class="tablecontent2">
				<input  size="3" name="Code"  id="Code" />
				</td>
                </tr>
				<tr>
                <td class="tablecontent1"><p>&nbsp;&nbsp;&nbsp;&nbsp Candidate Course  <span class="alert"><font color=red>*</font></span></p></td>
              <td> <select  class="listMenu" name="Course" id="course">
        <option selected value=''>Select</option>
		<option  value='CS'>CS </option>
		<option  value='EC'>EC</option>
		<option  value='EE'>EE</option>
		<option  value='CE'>CE</option>
		<option  value='MECH'>MECH</option>
        </select> 
			  </td> </tr>
		<tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Course Type<span class="alert"><font color=red>*</font></span> </td>

      <td><input type="radio" name="Course_type" value=AIDED>AIDED</input>
	  
	  <input type="radio" name="Course_type" value=UN_AIDED>UN_AIDED</input>
	 
	  </td>
	 </tr>
		<tr>					

        <td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp CATEGORY<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="Category" id="gender">
        <option selected value=''>Select</option>
		<option  value='GENERAL'>GENERAL </option>
		<option  value='OBC'>OBC</option>
		<option  value='SC'>SC</option>
		<option  value='ST'>ST</option>
		
        </select> 
		</td>
			    </td>

</tr>

    <tr>

       <td height="40" colspan="5" align="left"  bgcolor="#EEE8AA" class="tableheader"></td> </tr>
 <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Alloted Seat<span class="alert"><font color=red>*</font></span> </td>

      <td><input type="radio" id="Seat" name="Seat" Value="8890/Snq">Snq Quota</input>
	  
	  <input type="radio"  name="Seat" Value="11010/Govt">Governament Quota</input>
	  
	  <input type="radio" id="Seat" Size="30" name="Seat" Value="32052/Management">Management</input>
	  </td>
	 </tr>

<tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspClass<font color=#800080 >[In Semester]</font><span class="alert"><font color=red>*</font></span></td>

       <td class="tablecontent2">
        <select  class="listMenu" name="Class" id="Class">
        <option selected value=''>Select</option>
		<option  value='1st Sem'>1st Sem </option>
		<option  value='2nd Sem'>2nd Sem</option>
		<option  value='3rd Sem'>3rd Sem</option>
		<option  value='4th sem'>4th Sem</option>
		<option  value='5th Sem'>5th Sem</option>
		<option  value='6th sem'>6th Sem</option>
        </select> 
	

    </td> </tr>
     


 </table>

  <p>
  <div class="loginbox"> 
<input type="submit" value="Submit" name="submit"  onclick="return confirm('Are You Sure To Upload?')" />  
  </center></div>
  </div>
 
</form>

 <?php
include ("config.php");

$query = 'CREATE TABLE collage_Details( '.
         
        
         'Name VARCHAR(30) NOT NULL, '.
		 'Institution VARCHAR(30) NOT NULL, '.
		 'Code VARCHAR(20) NOT NULL, '.
		 'Course VARCHAR(15)NOT NULL, '.
		 'Course_type VARCHAR(15)NOT NULL, '.
         'category VARCHAR(30) NOT NULL, '.
         'Seat VARCHAR(30)NOT NULL,'.
		 'dtime DATETIME NOT NULL, '.
		 'Class VARCHAR(15)NOT NULL)';
		 
$result = mysql_query($query);
$Seat=1;
$Course_type=1;
if(isset($_POST['submit']))
{  
	$Name = $_POST['Name'];
	$Institution = $_POST['Institution'];
    $Code = $_POST['Code']; 
	$Course= $_POST['Course'];
	if(isset($_POST["Course_type"])){
	$Course_type= $_POST['Course_type'];
	}
	$Category= $_POST['Category'];
	if(isset($_POST["Seat"])){
	$Seat= $_POST['Seat'];
	}
	$Class = $_POST['Class'];

  if ($Name == "" || $Institution ==""  ||$Code ==""  || $Course ==""  || $Course_type ==""  || $Category ==""  ||
  $Seat ==""  ||$Class ==""  )
  
  { 
 
  echo"<center><font color=red size=+1>";
  echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
			else
			{
				mysql_query("insert into collage_Details
				(Name,Institution,Code,Course,Course_type,Category,Seat,Class,dtime) 
				values
				('$Name','$Institution','$Code','$Course','$Course_type','$Category','$Seat','$Class',now())",$conn)
				or die("Error ! refresh the page or relogin .");
		
				echo" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo"<font Size=+1 Color=green> Your Pay Amount :</font>";
				echo" &nbsp;&nbsp;";
				echo "<font Size=+1.5 >$Seat</font>";
				echo "</br>";
				echo "<center>";  
				echo "<font Size=+1.5 >Click on next to proceed to Payment ";
				echo "<br/>";
				echo "<font Size=+1.5 ><a href='Up.php'> NEXT </a>";	
			}
		}
	


?>
</body>
</html>


		