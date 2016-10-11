<?php
include './db-connect.php';
$db = DBConnector::dbConnection();
$results = $db->query('SELECT * FROM names');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Application</title>
</head>
<body>
The names in the database include the following.
<table>
<th><td>Names</td></th>
<?php
foreach($results as $row) {
?>
<tr>
<td><?=$row[0]?>
</tr>
<?php
}
?>
</table>

</body>
</html>