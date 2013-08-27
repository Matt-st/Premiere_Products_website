<?php
include_once 'connect.php';
$customernum=$_GET["q"];
				
		$customer=mysql_query("select * from CUSTOMER where CUSTOMER_NUM='$customernum'");
			if($customer)
			{//it worked dont do anything 
			
			}
			else
			{die('<p> Query Error: .<b> ' . mysql_error().'</b></p>');}
			
			
			<center><table >
			<tr>
			<td><p>Customer Number</p></td>
			<td><p>Customer Name</p></td>
			<td><p>Balance</p></td>
			<td><p>Credit Limit</p></td>
			<td><p>Representative Number</p></td>
			</tr>
			echo "The record has been found!
			<table border='1' >
			<tr>
			<td><p>Customer Number</p></td>
			<td><p>Customer Name</p></td>
			<td><p>Balance</p></td>
			<td><p>Credit Limit</p></td>
			<td><p>Representative Number</p></td>
			</tr>";
			while($num_row=mysql_fetch_array($customer))
			{
			
				echo "<tr>";
				echo "<td>" . $row['CUSTOMER_NUMBER'] . "</td>";
				echo "<td>" . $row['CUSTOMER_NAME'] . "</td>";
				echo "<td>" . $row['BALANCE'] . "</td>";
				echo "<td>" . $row['CREDIT_LIMIT'] . "</td>";
				echo "<td>" . $row['REP_NUM'] . "</td>";
				echo "</tr>";
							
			}
			
			echo"</table></center>";
			
			
			
			
		
	
	
?>	