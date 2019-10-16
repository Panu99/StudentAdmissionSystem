<?php

$conn = mysql_connect("localhost","root","")
or die("Could not connect to the server.");

mysql_query("CREATE DATABASE Student",$conn);
mysql_select_db("Student",$conn)
or die("Could not select the database.");

?>


