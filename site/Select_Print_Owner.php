<?php
ob_start();
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
include_once 'connect.php';
?>
<html>
<head>
<title>Select Customer Listing</title>
</head>

<?php
//define the owner number php  variable name
$owner = $_POST['customer_num'];
print "The owner number chosen was $owner<br/>";
$owner_query = mysql_query("SELECT * FROM CUSTOMER where CUSTOMER_NUM = '$owner'");
while ($row = mysql_fetch_array($owner_query))
{
	print "<p>{$row['CUSTOMER_NUM']} <br/>
			{$row['CUSTOMER_NAME']} <br/>
			{$row['STREET']} <br/>
			{$row['CITY']} <br/>
			{$row['STATE']} <br/>
			{$row['ZIP']} <br/>
			{$row['BALANCE']} <br/>
			{$row['CREDIT_LIMIT']} <br/>
			{$row['REP_NUM']} <br/>
			</p>\n";
			}

?>
</body>
</html>
