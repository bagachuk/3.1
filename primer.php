<?
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "candy";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error)
{
  die("Связь не установлена: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8mb4_0900_ai_ci');
echo "<p class='alert alert-success'> Связь установлена </p>";
?>