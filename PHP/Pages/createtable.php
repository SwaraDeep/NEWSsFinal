<?php
$conn = new mysqli("localhost", "root", "12345", "mydb");
$sql = "CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `imageurl` varchar(500) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `writer` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`idnews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
";

if($conn->query($sql) == TRUE){
    echo "Table created successfully";
}else {
    echo "Error creating table:" .$conn->error;
}
?>