<?php
include_once 'connect.php';
$q=$_GET["q"];
$resultShow = mysql_query("select * from ORDER_LINE where ORDER_NUM='$q'");
$result = mysql_query("delete from ORDER_LINE where ORDER_NUM='$q'");


echo "The record has been Deleted!
			<table border='1' >
			<tr>
			<td><p>Order Number</p></td>
			<td><p>Part Number</p></td>
			<td><p>Number Ordered</p></td>
			<td><p>Qouted Price</p></td>
			</tr>";

while($row = mysql_fetch_array($resultShow))
  {
  echo "<tr>";
  echo "<td>" . $row['ORDER_NUM'] . "</td>";
  echo "<td>" . $row['PART_NUM'] . "</td>";
  echo "<td>" . $row['NUM_ORDERED'] . "</td>";
  echo "<td>" . $row['QOUTED_PRICE'] . "</td>";  
  echo "</tr>";
  }
echo "</table>";


?>