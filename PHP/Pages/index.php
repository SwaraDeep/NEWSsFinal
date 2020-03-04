<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<link href="css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="data">
<?php
echo "<script src=shownews.js></script>";
$conn = new mysqli("localhost", "root", "12345", "myDB");
$que = "SELECT * FROM mydb.news;";
$result = $conn->query($que);
if ($result->num_rows > 0) {
    echo "<div class='cards'>";
    while ($row = $result->fetch_assoc()) {
        $image = "'images/" . $row["imageurl"] . "'";
        echo "<div class=container>
                <form action=shownews.php method=post>
                <button type=submit name=id value=" . $row["idnews"] . ">
                <img src=" . $image . " name=" . $row["idnews"] . ">
                <div class='bottom'><p class='title'><b> " . $row["title"] . "</b></p>
                <div class='author'>" . $row["writer"] . "</div>
                </button>
              </form></div>";
    }
    echo "</div>";
} else {
    echo "<div class=body>
          <div class=login id=login><p>No articles yet</p></div></div>";
}
$conn->close();
?>
</div>
<br><br><br>
</body>
</html>