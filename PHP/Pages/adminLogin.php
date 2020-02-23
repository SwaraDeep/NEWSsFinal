<html>
<head>


<title>NEWss - Admin Login</title>
<link href="css/index.css" type="text/css" rel="stylesheet">
<link href="css/login.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header">
<div class="heading">
<h1>NEWSs</h1>
</div>

<div class="menubar">
<a href="index.php">Home</a>
<a href="PostNews.html">Upload</a>
<select class="categories">
<option>Select Category</option>
<option>Politics</option>
<option>Science</option>
<option>Technology</option>
<option>Cinema</option>
<option>Wheather</option>
<option>Sports</option>
</select>
<a href="about.html">About Us</a>
<a href="#login" class="admin">Login</a>
<a href="howtouse.html">How to use</a>
<a href="contact.html">Contact</a>
</div>
</div>

<div class="body">
<div class="login" id="login">
<?php
try {
$name = $_POST["name"];
$pass = $_POST["pass"];
} catch (Exception $e) {
    echo "Error while logging in! Please try logging in";
}
$name = sha1($name);
$pass = sha1($pass);
if($name === "d033e22ae348aeb5660fc2140aec35850c4da997" && $pass === "d033e22ae348aeb5660fc2140aec35850c4da997"){
    echo "<b>Create Database:</b>
<form action='createdb.php'>
<input class=btn type='submit' value='Create DB'>
</form><br>
<b>Create Table:</b>
<form action='createtable.php'>
	<input class=btn type='submit' value='Create Table'>
</form><br>
<b>Delete Rows:</b>
<form action='truncateTable.php'>
	<input class=btn type='submit' value='Delete Rows'>
</form><br>
<b>Drop Table:</b>
<form action='droptable.php'>
	<input class=btn type='submit' value='Drop Table'>
</form><br>
<b>Drop Database:</b>
<form action='dropdatabase.php'>
	<input class=btn type='submit' value='Drop Database'>
</form>";
}else{
    echo "Invalid Credentials!";
}


?>
</div>
</div>
</body>
</html>
