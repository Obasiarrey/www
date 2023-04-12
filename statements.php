<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- switch statements-->  
    <form action="statements.php" method="post">
        What was your grade? 
        <input type="text" name="grade">
        <input type="Submit">
</form>
    <!-- Return statements and if statements--> 
    <?php
    function cube($num){
        echo "Hello";
        /*we can simply write $num*$num*$num, but we are trying to return the answer so we write*/ 
        return $num * $num * $num;
    }
    $cuberesult = cube(4);
    echo $cuberesult;
    echo "<br>";

    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall){/* we can have different operators we have the 'AND'('&&') and the 'OR'(||) operator*/
        echo "You are a tall male";
    }elseif ($isMale && !$isTall){/*there is also a negation operator '!'*/ 
        echo "You are a short male";
    }elseif (!$isMale && $isTall){
        echo "You are not male but Tall";
    }else{
        echo "You are not male and not tall";
    }
    echo "<br>";

    /*using comparisons in if statememts*/ 
    /* we will write a function to tell whcich number is begger though there is a command for that 'echo max(3, 6);' will give the max betwen the two*/ 
    function getMax($num1, $num2, $num3){
        if ($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        }else{
            return $num3;
        }
    }
        
    $getmax = getMax(300, 9000, 200);
    echo " The maximum number is $getmax <br>";
    /*In this comparisons we have operators such as '>=', '<=', '==', '!=' */

    /*switch statememts*/
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very badly";
            break;
        case "F":
            echo "You FAILED";
            break;
        default:
        echo "Invalid grade";
    }
    ?>
</body>
</html>