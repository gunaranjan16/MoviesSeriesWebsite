<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "students_marks_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else{
echo "Connection Successful". "<br>";
}

$sql = "SELECT * FROM marks1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
echo "Movie Name: " . $row["Physics"] . "<br>";

echo "Genre: " . $row["Chemistry"] . "<br>";
echo "Rating :" . $row["PSP"] . "<br>";
echo "Comment:" . $row["IE"] . "<br>";
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>