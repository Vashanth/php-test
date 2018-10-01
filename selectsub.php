<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('connect.php');
$q = $_GET['q'];
$sql="SELECT * FROM tab1 WHERE name = '$q'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Phone'] . "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>