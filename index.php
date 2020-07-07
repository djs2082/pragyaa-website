<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- content delivery network (cdn) for jquery -->
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<!-- cdn for jquery -->

<link rel="stylesheet" type="text/css" href="css/index.css"/>
<script src="javascript/index.js"></script>
</head>
<body>


<!-- login button -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;background-color:blue">Login</button>
<!-- login button -->


<!-- Login Form -->
<div id="id01" class="modal">
<form id="login" class="modal-content animate">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
</div>
<div class="container">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="uname" required>
<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<b id="error"></b>
<button style='background-color:blue' type="submit">Login</button>
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</div>
</form>
</div>
<!-- Login Form -->


</body>
</html>
