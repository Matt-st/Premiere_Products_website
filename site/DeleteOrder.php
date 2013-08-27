<?php
include_once 'connect.php';
$q=$_GET["q"];
$resultShow = mysql_query("select * from ORDERS where ORDER_NUM='$q'");
$result = mysql_query("delete from ORDERS where ORDER_NUM='$q'");


echo "The record has been Deleted!
			<table border='1' >
			<tr>
			<td><p>Order Number</p></td>
			<td><p>Order Date</p></td>
			<td><p>Customer Number</p></td>
			</tr>";

while($row = mysql_fetch_array($resultShow))
  {
  echo "<tr>";
  echo "<td>" . $row['ORDER_NUM'] . "</td>";
  echo "<td>" . $row['ORDER_DATE'] . "</td>";
  echo "<td>" . $row['CUSTOMER_NUM'] . "</td>";
   echo "</tr>";
  }
echo "</table>";


?>