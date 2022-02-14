<html> <head> <title> VITALESLAB01 </title> </head>
<body>
<?php

// original string
print 'Name:';
$str = " <b>Nicole Keith D. Vitales</b>";
  
// string converted to upper case
$resStr = strtoupper($str);
  
echo $resStr;
echo"</br>";

print "Today’s date and time is ";
// Set the new timezone
date_default_timezone_set('Asia/Manila');
// Return current date from the remote server
$date = date('<b>d-m-y h:i:s</b>');
echo $date;

echo"<br>";
echo"<br>";
echo'<b>Display the Area, Circumference, and Diameter of a circle if the radius is 23.</b><br>';
$radius = 23;
$diameter = NULL;
$circumference = NULL;
$area = NULL;

/* Calculation of diameter, circumference and area */
$diameter = 2 * $radius;
$circumference = 2 * pi() * $radius;
$area = pi() * $radius * $radius;

echo "\nDiameter       = " . $diameter . " units <br>";
echo "\nCircumference  = " . $circumference . " units <br>";
echo "\nArea           = " . $area . " sq. units <br>";

echo"<br>";
/* Calculation of are of a triangle */
echo'<b>Display the Area of a triangle if the base is 10 and the height is 12.</b><br>';
$base = 10;  
$height = 12;  
echo "area with base $base and height $height = " . ($base * $height) / 2;  

echo"<br>";
echo"<br>";
echo'<b>Display the value in degrees Celsius if the degree in Fahrenheit is 50.</b><br>';
$fahrenheit = 50;
$celsius = NULL;
/* Conversion of fahrenheit to celsius */
$celsius = (float)(5/9*($fahrenheit-32));
echo "The degrees Celsius of Fahrenheit $fahrenheit is " .$celsius. " Celsius";

echo"<br>";
echo"<br>";
echo'<b>Display the value of 1500 pesos in dollars if the conversion factor is $1 = P54.25.</b><br>';
$conversion_peso = 54.25;
$pesos = 1500;
$conversion = $pesos/$conversion_peso;
echo "The value of 1500 pesos in dollars is $conversion USD"


?>
</body>
<html>