<?php
include_once 'connect.php';
$q=$_GET["q"];
$resultShow = mysql_query("select * from REP where REP_NUM='$q'");
$result = mysql_query("delete from REP where REP_NUM='$q'");


echo "The record has been Deleted!
			<table border='1' >
			<tr>
			<td><p>Rep Number</p></td>
			<td><p>Last Name</p></td>
			<td><p>First Name</p></td>
			<td><p>Street</p></td>
			<td><p>City</p></td>
			<td><p>State</p></td>
			<td><p>Zip</p></td>
			<td><p>Comission</p></td>
			<td><p>Rate</p></td>
			</tr>";

while($row = mysql_fetch_array($resultShow))
  {
  echo "<tr>";
  echo "<td>" . $row['REP_NUM'] . "</td>";
  echo "<td>" . $row['LAST_NAME'] . "</td>";
  echo "<td>" . $row['FIRST_NAME'] . "</td>";
  echo "<td>" . $row['STREET'] . "</td>";
  echo "<td>" . $row['CITY'] . "</td>";
  echo "<td>" . $row['STATE'] . "</td>";
  echo "<td>" . $row['ZIP'] . "</td>";
  echo "<td>" . $row['COMMISSION'] . "</td>";
  echo "<td>" . $row['RATE'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?>