<?php
 $con=mysql_connect("localhost","root","");
 if(!$con)
 {
	die("Error-Could not connect:".mysql_error());
 }
 mysql_select_db("school",$con) or die(mysql_error());
 
 $sql="INSERT INTO student_details(sName,sAdmNum,sCourse) VALUES ('$_POST[txtName]','$_POST[txtAdm]','$_POST[txtCourse]')";
 if( !mysql_query($sql,$con))
 {
   die("Erro:-Could not execute insert".mysql_error());
 }
 else
 {
	$sName=$_POST['txtName'];
	echo "<p>".$sName."'s Record inserted!</p>";
 }
    
?>
