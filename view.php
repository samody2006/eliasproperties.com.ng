<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
</head>
<body>
<?php

include('../includes/config.php');

$result = mysql_query("SELECT * FROM properties")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Address</font></th>
<th><font color='Red'>City</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['House_type'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Estate'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['location'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="insert.php">Insert new record</a></p>
</body>
</html>