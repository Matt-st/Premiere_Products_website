<?php
include_once 'connect.php';
$q=$_GET["q"];
$resultShow = mysql_query("select * from CUSTOMER where CUSTOMER_NUM='$q'");
$result = mysql_query("delete from CUSTOMER where CUSTOMER_NUM='$q'");


echo "The record has been Deleted!
			<table border='1' >
			<tr>
			<td><p>Customer Number</p></td>
			<td><p>Customer Name</p></td>
			<td><p>Street</p></td>
			<td><p>City</p></td>
			<td><p>State</p></td>
			<td><p>Zip</p></td>
			<td><p>Balance</p></td>
			<td><p>Credit Limit</p></td>
			<td><p>Representative Number</p></td>
			</tr>";

while($row = mysql_fetch_array($resultShow))
  {
  echo "<tr>";
  echo "<td>" . $row['CUSTOMER_NUM'] . "</td>";
  echo "<td>" . $row['CUSTOMER_NAME'] . "</td>";
  echo "<td>" . $row['STREET'] . "</td>";
  echo "<td>" . $row['CITY'] . "</td>";
  echo "<td>" . $row['STATE'] . "</td>";
  echo "<td>" . $row['ZIP'] . "</td>";
  echo "<td>" . $row['BALANCE'] . "</td>";
  echo "<td>" . $row['CREDIT_LIMIT'] . "</td>";
  echo "<td>" . $row['REP_NUM'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?>