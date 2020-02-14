<?php
$r=$_POST['FIRSTNAME'];
$s=$_POST['LASTNAME'];
$t=$_POST['USERNAME'];
$u=$_POST['EMAIL'];
$v=$_POST['PASSWORD'];
$w=$_POST['CONPASSWORD'];
if($r==""||$s==""||$t==""||$u==""||$v==""||$w=="")
{
    //lauda mera abcd
$msg="PLEASE FILL ALL THE FIELDS";
echo"<script type='text/javascript'>alert('$msg');</script>";
}
if($v!=$w)
{$msg="PASSWORD DOES NOT MATCH !!!";
echo"<script type='text/javascript'>alert('$msg');</script>";
}
else
{

mysql_connect("localhost","root","");
mysql_select_db("registration");
$query1="SELECT * FROM reg WHERE USERNAME='$t'&& PASSWORD='$v'";
$result= mysql_query($query1);
$con= mysql_num_rows($result);
if ($con==0)
{

$query="INSERT INTO reg(FIRSTNAME,LASTNAME,USERNAME,EMAIL,PASSWORD) VALUES('$r','$s','$t','$u','$v')";
mysql_query($query);
echo"Registered Successfully";
}
else
{
echo"User Already Exists";

}
}
?>