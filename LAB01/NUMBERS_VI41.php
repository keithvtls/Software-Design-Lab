<html> <head> <title> PHP Test: Using Numbers </title> </head>
<body bgcolor=black> <font color=white>
<?php
echo "<b>Using Numbers </b><br>";
print "Today’s date is ";
echo gmdate("M d Y");
echo "<br>";
$quantity = 30; // 30 pcs.
$price = 119.95; // $119.95
$taxrate = .05; // 5% tax rate
$total = $quantity * $price;
$total = $total + ($total * $taxrate); // Add tax
$total = number_format ($total, 2); // Format the results
echo "You are purchasing <b> $quantity </b> widgets at a cost of <b>\$ $price</b> each.<br>";
echo "With tax, the total comes to <b>\$ $total </b><br><br>";
echo "<b>Using define() Function</b><br>";
define ("YEAR", "2005");
define ("INDAY", "July 4th");
echo "US Independence Day is " . INDAY . "<br>";
echo "We are in year " . YEAR . ".<br>";
echo "This server is running version " . "<b>" . PHP_VERSION . " of the PHP on the " . PHP_OS .
".</b><br><br>";
echo "<b>Single and Double Quotation Marks</b><br>";
$var = 'test';
echo "var is equal to $var <br>";
echo 'var is equal to $var <br>';
?>
</font>
</body>
</html>