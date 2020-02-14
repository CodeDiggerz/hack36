<?php 
session_start();
$x=$_POST['USERNAME'];
$y=$_POST['PASSWORD'];
if($x==""||$y=="")

{$msg="PLEASE FILL AL THE FIELDS !!!";
echo"<script type='text/javascript'>alert('$msg');</script>";}
else
{

mysql_connect("localhost","root","");
mysql_select_db("registration");
$query1="SELECT * FROM reg WHERE USERNAME='$x'&& PASSWORD='$y'";
$result= mysql_query($query1);
$con= mysql_fetch_array($result);
if (($con['USERNAME']==$X) && ($con['PASSWORD'] == $y))
{$_SESSION['USERNAME'] = $x; 
        header("Location: welcome.php");}
		else{
$msg="INFORMATION MISSMATCH !!!";
echo"<script type='text/javascript'>alert('$msg');</script>";}


}


?>