<?php
$conn = new mysqli("project-db.clymw264oc2j.ap-south-1.rds.amazonaws.com","admin","Project456","webapp");

if ($conn->connect_error) {
    die("Connection failed");
}

$conn->query("INSERT INTO visitors() VALUES()");

$result = $conn->query("SELECT COUNT(*) as total FROM visitors");
$row = $result->fetch_assoc();

echo "<h1>Welcome Ramees</h1>";
echo "<p>Total Visits: ".$row['total']."</p>";
?>
