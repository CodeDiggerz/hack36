<!DOCTYPE html>
<html>
<head>
<style type ="text/css">
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
  document.getElementById("AddFriend").style.display = "block";
}

function closeForm() {
  document.getElementById("AddFriend").style.display = "none";
} 
</script>
</head>
<body><center>
<button class="open-button" onclick="openForm()">Add Friends</button>
<div class="form-popup" id="AddFriend">
<form method ="POST" action="AddFriendConnect.php">
<h1>Add Friends </h1><br>
<p>Find your friends on Bill Splitter. </p><br>
<label>Username</label><br>
<input type="text" name="USERNAME" class="form-control"><br>
<input type ="submit" value= "Find Friend"> <br>
<button type="submit" class="btn cancel" onclick="closeForm()">Close </button>
</form>
</div>
</body>
</html>