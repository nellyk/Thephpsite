<html>
<head>
<title>List table data</title>
</head>
<body>
    
<?php
// Connect to database server
mysqli_connect("localhost", "root", "") or die (mysql_error ("DB Connect Error"));

// Select database
mysqli("student") or die(mysql_error("DB Not Found"));

$result = mysqli_query("SELECT * FROM students");

echo "<table border='1'>
<tr>
    <th>Student Number</th>
    <th>Student Name</th>
    <th>Student Major</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['major'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>