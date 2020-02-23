<?php
$conn = new mysqli("localhost", "root", "12345", "myDB");
if($conn->query("DROP DATABASE myDB;") === TRUE){
    echo "Database dropped!";
}else{
    echo "Eroor while dropping database: " .$conn->error;
}
?>