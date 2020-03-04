<html>
<head>
	<title>NEWss - Admin Login</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<link href="css/login.css" type="text/css" rel="stylesheet">
	<link href="css/postnews.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="body">
		<div class="login" id="login">
<?php
    $name = $_POST["uname"];
    $pass = $_POST["upass"];
    $conn = new mysqli("localhost", "root", "12345", "myDB");
    $que = "SELECT * FROM mydb.users WHERE name='".$name."';";
    $result = $conn->query($que);
    if($result == NULL){
        echo "No account found with given details";
    }elseif ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        if($name== $row["name"] && $pass== $row["password"]){
            include 'postnews.html';
        }else{
            echo "Invalid Creadentials!";
        }
        }
    }else{
        echo "No user found with the given username!";
    }
?>
		</div>
	</div>
</body>
</html>
