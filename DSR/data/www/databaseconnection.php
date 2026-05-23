 <?php
$servername = $_ENV['SERVERNAME'];
$user = $_ENV['USER'];
$pass = $_ENV['PASS'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=readly", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 