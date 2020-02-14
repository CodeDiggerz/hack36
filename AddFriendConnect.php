<?php
$x=$_POST['USERNAME'];
if($x=="")
{$msg="Please tell us the username you are looking for. ";
echo"<script type='text/javascript'>alert('$msg');</script>";
}
else
{

mysql_connect("localhost","root","");
mysql_select_db("registration");
$query="SELECT * FROM reg WHERE USERNAME ='$x';
$res= mysql_query($query);
$con= mysql_num_rows($res);
if ($con==0){
$msg="PASSWORD DOES NOT MATCH !!!";
echo"<script type='text/javascript'>alert('$msg');</script>";
}
else{
$msg="Friend found !!!";
echo"<script type='text/javascript'>alert('$msg');</script>";
}

}
?>