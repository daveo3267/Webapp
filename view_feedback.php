<?php

$conn = mysqli_connect("localhost:3307", "root", "", "campaign_feedback");

if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}


$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>". $row['name']. "</td>";
	echo "<td>". $row['email']. "</td>";
	echo "<td>". $row['feedback']. "</td>";
	echo "<td>". $row['rating']. "</td>";
	echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>