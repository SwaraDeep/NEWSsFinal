<?php
$conn = new mysqli("localhost", "root", "12345");
$conn->query("USE myDB;");
$image = $_POST["image"];
$title = $_POST["title"];
$description = $_POST["desc"];
$writer = $_POST["writer"];
$date = "Now";


$que = "SELECT * FROM news;";
$result = $conn->query($que);

$id = $result->num_rows + 1;

if($image != NULL){
//$sql = "INSERT INTO news(idnews, imageurl, title, description, writer) values($id, $image, $title, $description, $writer); ";
$sql = "insert into news(idnews, imageurl, title, description, writer) values($id,'$image','$title','$description','$writer')";
}
if($conn->query($sql) === TRUE){
    echo "Uploaded Succesfully!";
}else{
    echo "Error while uploading: " . $conn->error;
    echo $id . "<br>  " . $image . "<br>  " . $title . "<br>  " . $description . "<br>  " . $writer . "<br>  " . $date;
}
?>