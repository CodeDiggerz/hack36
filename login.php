<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type ="text/css">

form {
  border-style:;
   width: 30%;
    margin-top: 150px;
	    
	box-shadow: 5px 5px;
	border-radius: 25px;
  padding: 20px; 
  width: 250px;
  height: 300px; 
	
}
body{  
   background-image: url("a.jpg");
   background-repeat: no-repeat;
   }
 h1{
  font-family: "Comic Sans MS ";
}
label{
  font-family: "Verdana "; }
p{font-family: Arial, Helvetica, sans-serif;}

.form-popup {
  display: none;
  position: center;
  bottom: 0;
  right: 15px;
  border: initial;
  z-index: 9;
}
.form-container {
  max-width: 100px;
  padding: 10px;
  background-color: white;
}

</style>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
} 
</script>
</head>
<body><center>
<button class="open-button" onclick="openForm()">Open Form</button>
<div class="form-popup" id="myForm">
<form method ="POST" action="login.php">
<!--<img src="Untitled.png"><br>-->
<h1>LogIn </h1>
<p>Login to your account.</p>
<label>Username</label><br>
<input type="text" name="USERNAME" class="form-control"><br>
<label>Password</label><br>
<input type="password" name="PASSWORD" class="form-control"><br>
<input type="checkbox" name="rememberme" value="1" />&nbsp;Remember Me<br>
<input type ="submit" value= "Login"> <br>
<button type="submit" class="btn cancel" onclick="closeForm()">Close </button>
<br>
<p>Don't have an account? <a href="reg.php">Sign up now</a>.</p>
</form>
</div>
</body>
</html>