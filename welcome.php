<?php
session_start();
if (isset($_SESSION['USERNAME']))
{
echo "You have successfully logged in";
echo $_SESSION['USERNAME'];
echo "<a href='logout.php'>LOGOUT</a>";
}
else
{
header ("location:logout.php");

}

?>