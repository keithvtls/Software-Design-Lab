<html> <head> <title> PHP Test: Variables </title> </head>
<body bgcolor=black> <font color=white>
<?php
echo "<b>Using String Variables</b><br>";
print "Today’s date is ";
echo gmdate("M d Y");
echo "<br>";

$skul = "Adamson University";
$kors = "BS Computer Engineering";
$klas = "Engineering Technology";
echo "I go to $skul.<br>";
echo "My course is $kors.<br>";
echo "I attend the class: Software Design-$klas. <br><br>";
echo "<b>Using String Concatenation</b><br>";
$first_name = "Aimee.";
$last_name = "Acoba";
$author = $first_name . " " . $last_name;
$book = "Harry Potter";
echo "The book <i> $book </i> is written by $author. <br><br>";
echo "<b>Using Concatenation Assignment Operator </b><br>";

$title = "Harry Potter:";
$subtitle = " The Goblet of Fire";
$title .= $subtitle;
echo "$title<br> OR: <br>";
$t2 = "The Lord of The Rings:";
$s2 = "Return of the King";
$t = $t2;
$t .= " ";
$t .= $s2;
echo "$t <br><br>";
echo "<b>Using String Functions</b><br>";
$name = "Aimee G. Acoba";
$n = strlen($name);
$l = strtolower($name);
$u = strtoupper($name);
$w = ucwords($name);
echo "<i>$name</i> has $n characters.<br>";
echo "<i>$name</i> in lowercase: $l.<br>";
echo "<i>$name</i> in uppercase: $u.<br>";
echo "<i>$name</i> using <i>ucwords()</i>: $w.<br><br>";
?>
</font>
</body>
</html>