<html>
<head>
	<title>NEWss - Admin Login</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<link href="css/login.css" type="text/css" rel="stylesheet">
</head>
<body>
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
if ($name === "d033e22ae348aeb5660fc2140aec35850c4da997" && $pass === "d033e22ae348aeb5660fc2140aec35850c4da997") {
    echo "<b>Create Database:</b>
        <form action='createdb.php'>
            <input class=btn type='submit' value='Create DB'>
        </form><br>
        <b>Create News Table:</b>
        <form action='createtable.php'>
	       <input class=btn type='submit' value='Create Table'>
        </form><br>
        <b>Create User Table:</b>
        <form action='createusertable.php'>
	       <input class=btn type='submit' value='Create Table'>
        </form><br>
        <b>Delete Rows:</b>
        <form action='truncateTable.php'>
	       <input class=btn type='submit' value='Delete Rows'>
        </form><br>
        <b>Drop News Table:</b>
        <form action='deletenewstable.php'>
	       <input class=btn type='submit' value='Drop Table'>
        </form><br>
        <b>Drop User Table:</b>
        <form action='deleteusertable.php'>
	       <input class=btn type='submit' value='Drop Table'>
        </form><br>
        <b>Drop Database:</b>
        <form action='deletedatabase.php'>
	       <input class=btn type='submit' value='Drop Database'>
        </form>";
} else {
    echo "Invalid Credentials!";
}
?>
		</div>
	</div>
</body>
</html>
