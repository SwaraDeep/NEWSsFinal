<?php
$conn = new mysqli("localhost", "root", "12345", "mydb");
$sql = 'TRUNCATE myDB.news';

if($conn->query($sql) == TRUE){
    echo "Table truncated successfully";
}else {
    echo "Error creating table:" .$conn->error;
}
?>