<?php
include_once 'connect.php';
$q=$_GET["q"];
$resultShow = mysql_query("select * from PART where PART_NUM='$q'");
$result = mysql_query("delete from PART where PART_NUM='$q'");


echo "The record has been Deleted!
			<table border='1' >
			<tr>
			<td><p>Part Number</p></td>
			<td><p>Description</p></td>
			<td><p>On Hand</p></td>
			<td><p>Warehouse</p></td>
			<td><p>Price</p></td>
			</tr>";

while($row = mysql_fetch_array($resultShow))
  {
  echo "<tr>";
  echo "<td>" . $row['PART_NUM'] . "</td>";
  echo "<td>" . $row['DESCRIPTION'] . "</td>";
  echo "<td>" . $row['ON_HAND'] . "</td>";
  echo "<td>" . $row['WAREHOUSE'] . "</td>";
  echo "<td>" . $row['PRICE'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?>