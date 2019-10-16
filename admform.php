<?php

?>
<html>
<head>
<title>&nbsp; Online Admission form. </title>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">  
<style>
body 
{
  margin: 0;
  padding: 0;
  background: #DBBF9A;
  font-family:Minion Pro SmBd;
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
	height: 35px;
	color: #00008B;
	font-size: 16px;
	background: #ff267e;
	cursor: pointer;
	border-radius: 20px;
	width: 180px;
}
.loginbox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}


				.jumbotron
				{
					 background-image: url("img/admform.jpg");
                            background-size: cover;
				}
				</style>
</head>

<CENTER>
<body>
<div class="nav">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbspHome</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspContact Us</a></li>
		<li><a href="help.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbspHelp</a></li>
        </ul>
		</div>
	     <form name="form1" method="post" action="" autocomplete="off">
<div class="jumbotron " style="margin-top: 01%; height: 24%; border-radius: 25px 25px 25px 25px; height: 25%;">
<font color=#800080 size="4">
	 <center>&nbsp;&nbsp;&nbsp;&nbsp  Before proceeding, please ensure that you have read HELP instruction to be fed is readily available with you. 
	 	<br><font color=#000000><font color=red>*</font><strong>&nbsp;&nbsp;&nbsp;&nbsp;Mandatory Field</strong></font></font>

<body bgColor="#DBBF9A" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">

<table width="950px">
<tr>

     <td colspan=2  align=center>
	 
<br/>
	 &nbsp;&nbsp;&nbsp;
	 </td>

</tr>
</div>
<tr>

     <td colspan=2 bgcolor=white align=center></td>

</tr>

 
<tr>
                <td height="25" colspan="4" class="tableheader"><br><br><b >&nbsp;&nbsp;&nbsp;&nbsp Personal Details :</b></td>
              </tr>

<tr>
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Full Name <font color=#800080 >[as in Secondary School Certificate]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
		
		
	<input type=text name="fullname" size=40 maxlength=40 id=firstname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)"> <br/><font color=#800080>[Please do not use any prefix such as Shri or Dr. etc. with Name]</font>
    </td></tr>
	        <tr>
                <td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Date of Birth : <span class="alert"><font color=red>*</font></span></p></td>
                <td colspan="3" class="tablecontent1">
				<input type="date" name="in_date" id="in_date"/>
				 </td>
				 </tr>
<tr>
                <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Age 
 </td>
                <td colspan="3" class="tablecontent2">
				<input  size="3" name="age"  id="txtage" />
				
				</td>
                </tr>
			   
 <tr>
<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Gender<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="gender" id="gender">
        <option selected value=''>Select</option>
		<option  value='MALE'>MALE </option>
		<option  value='FEMALE'>FEMALE</option>
        </select> 
		
		</td></tr>
		<tr>					

        <td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp CATEGORY<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="opt_cat" id="gender">
        <option selected value=''>Select</option>
		<option  value='GENERAL'>GENERAL </option>
		<option  value='OBC'>OBC</option>
		<option  value='SC'>SC</option>
		<option  value='ST'>ST</option>
		
        </select> 
		</td>
			    </td>
   



   

     <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspMother's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent1">

		<input type=text name="mothername" id=mname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">

       <br/><font color=#800080>[Please do not use any prefix such as Smt or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Father's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent2">

	<input type=text name="fathername" id=fname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));'onkeydown="return alphactrl(event)">

      <br/><font color=#800080>[Please do not use any prefix such as Shri or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspNationality</td>

      <td class="tablecontent1">

	<input type=text name="nation" id="txtnationality" value=""  size=31 maxlength=10  onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">

      </td>

</tr>

		 <tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspReligion <font color=red> *</font></td>

      <td class="tablecontent2">

		<select width=30 size=1 name=religion   class="listMenu">

        <option selected value=''>Select

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>

        <option value='Hindu'>Hindu</option>

        <option value='Christian'>Christian</option>

        <option value='Islam'>Islam</option>

        <option value='Jain'>Jain</option>

        <option value='Sikh'>Sikh</option>

        <option value='Buddhist'>Buddhist</option>

        <option value='Parsi'>Parsi</option>

        <option value='Other'>Other</option>

	</select></td>

    </tr>

   

    <tr>

                <td height="20" colspan="5" align="left" class="tableheader"><font size=+1.5><strong><br><br>&nbsp;&nbsp;&nbsp;&nbspContact Details </font></strong>:</td>

                      </tr>



    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Address for Communication<span class="alert"><font color=red>*</font></span> </td>

      <td class="tablecontent2">

    <TEXTAREA Name="address" ROWS=2 COLS=20 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphacharintspecial(event,number4) && alphactrl(event));" onkeydown="return alphactrl(event)" >

	 
</TEXTAREA> <font color=#800080>[Maximum 50 character]
     </td>

	 </tr>

	

 <tr><td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp State<span class="alert"><font color=red>*</font></span></td>

	<td class="tablecontent2">

 <select size=1 name="state" id=txtstate class=listMenu>
 <option value=''>Select State</option>
 <option value='ANDAMAN AND NICOBAR'>ANDAMAN AND NICOBAR</option>
 <option value='ANDHRA PRADESH'>ANDHRA PRADESH</option>
 <option value='ARUNACHAL PRADESH'>ARUNACHAL PRADESH</option>
 <option value='ASSAM'>ASSAM</option>
 <option value='BIHAR'>BIHAR</option>
 <option value='CHANDIGARH'>CHANDIGARH</option>
 <option value='CHATTISGARH'>CHATTISGARH</option>
 <option value='DADRA NAGAR HAVELI'>DADRA NAGAR HAVELI</option>
 <option value='DAMAN DIU'>DAMAN DIU</option>
 <option value='DELHI'>DELHI</option>
 <option value='GOA'>GOA</option>
 <option value='GUJARAT'>GUJARAT</option>
 <option value='HARYANA'>HARYANA</option>
 <option value='HIMACHAL PRADESH'>HIMACHAL PRADESH</option>
 <option value='JAMMU AND KASHMIR'>JAMMU AND KASHMIR</option>
 <option value='JHARKHAND'>JHARKHAND</option>
 <option value='KARNATAKA'>KARNATAKA</option>
 <option value='KERALA'>KERALA</option>
 <option value='LAKSHADWEEP'>LAKSHADWEEP</option>
 <option value='MADHYA PRADESH'>MADHYA PRADESH</option>
 <option value='MAHARASHTRA'>MAHARASHTRA</option>
 <option value='MANIPUR'>MANIPUR</option>
 <option value='MEGHALAYA'>MEGHALAYA</option>
 <option value='MIZORAM'>MIZORAM</option>
 <option value='NAGALAND'>NAGALAND</option>
 <option value='ORISSA'>ORISSA</option>
 <option value='PONDICHERRY'>PONDICHERRY</option>
 <option value='PUNJAB'>PUNJAB</option>
 <option value='RAJASTHAN'>RAJASTHAN</option>
 <option value='SIKKIM'>SIKKIM</option>
 <option value='TAMIL NADU'>TAMIL NADU</option>
 <option value='TRIPURA'>TRIPURA</option>
 <option value='UTTAR PRADESH'>UTTAR PRADESH</option>
 <option value='UTTARAKHAND'>UTTARAKHAND</option>
 <option value='WEST BENGAL'>WEST BENGAL</option>
 </select>

      <font color=black> Pin Code<span class=alert><font color=red>*</font></span>
	  <input name="pincode"onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"  id=txtpin  maxlength=6 size=6 name=pincode />

   </td>
	  </tr> 
   <tr>
      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Email address<span class="alert"><font color=red>*</font></span></td>
       <td class="tablecontent2">
		<input type=text name="email" id=txtemail size=31  maxlength=45 onChange="return ValidateForm007();" onkeypress="return emailctrl(event);" onkeydown="return emailctrl(event);"><font color=#800080>[Maximum 45 character] 

 </td>

     </tr>


<tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspMobile Number <font color=red>*</font></td>

       <td class="tablecontent2">

	<input name="mobile" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" size="10"   id=txtpin maxlength="10" name=mobile /><font color=#800080>(10 digit)</font>

    </td> </tr>



 </table>
<input type="hidden" name="modtype" id="modtype" value="1"/>

 </center>
<center>
  <div class="loginbox"  style="position:absolute; left:44%; top:110%;" > 
<input type="submit" value="Submit" name="submit" onclick="return confirm('Are You Sure To Submit?')">  
  </center></div>


 <?php

include ("config.php");

$query = 'CREATE TABLE pdetails( '.
         
         
         'fullname VARCHAR(30) NOT NULL, '.
		 'in_date VARCHAR(30) NOT NULL, '.
         'age VARCHAR(3) NOT NULL, '.
		 'gender VARCHAR(5) NOT NULL, '.
		 'opt_cat VARCHAR(15)NOT NULL, '.
         'mothername VARCHAR(30) NOT NULL, '.
         'fathername VARCHAR(30)NOT NULL,'.
		 'religion VARCHAR(15)NOT NULL,'.
		 'address VARCHAR(200) NOT NULL,'.
		 'state VARCHAR(50) NOT NULL,'.
		 'pincode INT(50) NOT NULL,'.
		 'email VARCHAR(20) NOT NULL,'.
		 'mobile VARCHAR(52) NOT NULL)';
            
$result = mysql_query($query);

if(isset($_POST['submit']))
{  
	
	$fullname = $_POST['fullname'];
	$in_date = $_POST['in_date'];
    $age = $_POST['age'];
	 
	$gender= $_POST['gender'];
	$opt_cat= $_POST['opt_cat'];
	$mothername = $_POST['mothername'];
	$fathername = $_POST['fathername'];
	$religion  = $_POST['religion'];
	$address  = $_POST['address'];
	
    $state  = $_POST['state'];
	$pincode  = $_POST['pincode'];
	$email = $_POST['email'];
	$mobile  = $_POST['mobile'];
	
  if ($fullname == "" || $in_date ==""  ||$age ==""  || $gender ==""  || $opt_cat ==""  || $mothername ==""  ||
  $fathername ==""  ||$religion ==""  ||$address ==""  || $state ==""  || $pincode ==""  ||  $email ==""  ||$mobile ==""  )
  
  { 
  echo"<center>";
  echo"<font color=red size=+1>";
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
	else
	{
		if($age < 15)
		{
			echo "<center><font color=red size=+1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>You are not eligible to apply as you are below 15 years</font><br>";
			
		}
		else
		{
			$regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
			if(!preg_match($regexp, $email))
			{
			
				echo "<font color=red size=+1><center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Email address entered is not valid.</font>";
				echo"</br>";
				echo "<font color=red size=+1><center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Please enter a correct email address</font>";
			}
			else
			{
				mysql_query("insert into pdetails
				(fullname,in_date,age,gender,opt_cat,mothername,fathername,religion,address,state,pincode,email,mobile) 
				values
				('$fullname','$in_date','$age','$gender','$opt_cat','$mothername','$fathername','$religion','$address','$state','$pincode','$email','$mobile')",$conn)
				or die("Error ! refresh the page or relogin .");
		                 
				echo "<font color=red size=+1><center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Click on next to proceed ";
                echo" &nbsp;<center><font color=blue size=+1><a href= edu.php>NEXT</a>";			
				echo "<br/>";
				
				
					
			}
		}
	}
	
}
?>
 </form>
 </div>
</body>
</html>


		