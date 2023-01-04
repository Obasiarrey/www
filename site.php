<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo("Hello world");
        echo "<h1> My site </h1>";
        echo "<hr>";
        echo "this is my page<br>";

        $charactername = "John";
        $characterage = 60;
        echo "There was once a man named $charactername <br>";
        echo "He was $characterage years old<br>";
        echo "he really liked the name $charactername <br>";
        echo " But didn't like being $characterage <br>";

        $phrase = "To be or not to be";
        $age = 30;
        $gpa = 30.0;
        $isMale = false;

        $string = "Giraffe Academy";
        echo strlen($string);
        echo "<br>";
        echo $string[5];
        $string[4] = "z";
        echo $string;
        echo " wierd things happen";
        $phrase1 = " wierd"
    ?>

    

</body>
</html>