<html> <head> <title> PRELIM_EXAM </title> </head>
<body>
    <form action="" method="POST">
        First Number: <br><input type="text" name="x" value=""><br><br>
        Second Number: <br><input type="text" name="y" value=""> <br><br>
        
		Operator: <br>
        <input type="checkbox" name="add" value="">Add<br>
        <input type="checkbox" name="subtract" value="">Subtract<br>
        <input type="checkbox" name="multiply" value="">Multiply<br>
        <input type="checkbox" name="divide" value="">Divide<br>
        <input type="checkbox" name="average" value="">Average<br>
        <br><button input type="submit" name="submit" value="submit">Calculate</button>
    </form>

<?php

if(isset($_POST["submit"])){
    $x= $_POST["x"];
    $y= $_POST["y"];
}?>

<br><textarea id="" rows="5" cols="30">
addition : <?php if(isset($_POST["add"])){
    echo $x + $y;
    }?>

subtract : <?php if(isset($_POST["subtract"])){
    echo $x - $y;
    }?>

multiply : <?php if(isset($_POST["multiply"])){
    echo $x * $y;
    }?>

divide : <?php if(isset($_POST["divide"])){
    echo $x / $y;
    }?>

average : <?php if(isset($_POST["average"])){
    echo ($x + $y)/2;
    }?>

</textarea>
</body>
</html>