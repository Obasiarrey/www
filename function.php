<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Function a special container used to put a bunch of code performing a speciifc task-->
    <?php
        function sayHi($name, $age){/*functions can hold more than one line of code*/
            echo "Hello $name , you are $age <br>";
        }/*fro this code to execute u need to calll the function*/
       
        sayHi("Mike", 15);
        sayHi("Tom", 15);
        sayHi("Britney", 16);/*with this function you can call it many times and it has no issues*/
    ?>

</body>
</html>