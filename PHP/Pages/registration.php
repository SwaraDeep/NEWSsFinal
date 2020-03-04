<?php
$conn = new mysqli("localhost", "root", "12345");
$conn->query("USE myDB;");
$name = $_POST["username"];
$location = $_POST["location"];
$pass = $_POST["password"];
$repass = $_POST["repassword"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

//$id = $result->num_rows + 1;

if($name == NULL || $location == NULL || $pass == NULL || $repass == NULL || $mobile == NULL || $email === NULL){
    echo "Please fill all the fields and try again!";
//$sql = "INSERT INTO news(idnews, imageurl, title, description, writer) values($id, $image, $title, $description, $writer); ";
//$sql = "insert into news(idnews, imageurl, title, description, writer) values($id,'$image','$title','$description','$writer')";
}elseif (strlen($pass) < 8 || strlen($pass) > 14){
    echo "Please choose another password of length 8-14 characters only";
}elseif ($pass != $repass){
    echo "Passwords doesn't matched. Please try again!";
}else{
    $sql = "INSERT INTO users(name, location, password, mobile, email) values('$name', '$location', '$pass', '$mobile', '$email')";
    if($conn->query($sql) === TRUE){
        echo "Registered Succesfully!";
    }else{
        echo "Error while registering: " . $conn->error;
    }
}

?>