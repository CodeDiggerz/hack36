<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<style type ="text/css">
form {border-style:;
   width: 40%;
    margin-top: 150px;
	    
	box-shadow: 5px 5px;
	border-radius: 25px;
  padding: 20px; 
  width: 250px;
  height: 500px; 
	 }
body{ 
  background-image: url("a.jpg")
  }
  h1{font-family: "Comic Sans MS ";
  }
  p{
  font-family: "Verdana ";
  }
  label{
  font-family: "Verdana "; }
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
<form method ="POST" action="connect.php">

<h1>Sign Up</h1>
<p>Please fill this form to create an account.</p>
<label>First Name</label><br>
<input type="text" name="FIRSTNAME" class="form-control"><br>
<label>Last Name</label><br>
<input type="text" name="LASTNAME" class="form-control"><br>
<label>Username</label><br>
<input type="text" name="USERNAME" class="form-control"><br>
<label>Email</label><br>
<input type="text" name="EMAIL" class="form-control"><br>
<label>Password</label><br>
<input type="password" name="PASSWORD" class="form-control"><br>
<label>Confirm Password</label><br>
<input type="password" name="CONPASSWORD" class="form-control"><br>
<input type ="submit" value= "SUBMIT"> <br>
<input type ="reset" value ="RESET"> <br>
<button type="submit" class="btn cancel" onclick="closeForm()">Close </button>
<br>
<p>Already have an account? <a href="login.php">Login here</a>.</p>
</form>
</body>
</html>