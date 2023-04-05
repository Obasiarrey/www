<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <!---Building a mad libs game-->
<form action="site.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural noun: <input type="text" name="pluralnoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="Submit">
</form>

<?php
$color = $_GET["color"];
$pluralnoun = $_GET["pluralnoun"];
$celebrity = $_GET["celebrity"];
   echo"Roses are $color <br>";
   echo"$pluralnoun are Blue <br>";
   echo"i love $celebrity <br>";
?>
<!-- buillding a basic calculator-->
<form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit">
</form> 

<?php echo $_GET["num1"] + $_GET["num2"]
?> 

</body>
</html>