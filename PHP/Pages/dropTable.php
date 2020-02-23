<?php
$conn = new mysqli("localhost", "root", "12345", "myDB");
if($conn->query("DROP TABLE news;") === TRUE){
    echo "Table dropped!";
}else{
    echo "Error droping table: " .$conn->error;
}
$conn->close();
?>