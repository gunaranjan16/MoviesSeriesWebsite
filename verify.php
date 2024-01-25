<html>
<body>
<?php
session_start();
$host= "localhost";
$username= "root";
$password = "";
$db_name = "stu_registration_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else{
echo "Connection Successful". "<br>";
}
$sql = "SELECT * FROM tab1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((strcmp($row["name"],$_POST["fname"]) == 0))
{
    $_SESSION['name'] = $row["name"];
    header("location: index.php");
}
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>