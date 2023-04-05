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
    /*Array is a container or structure to store information. It stores more than one piece of information.*/
    $friends = array("Kevin", "Carrine", "Austin", "Oscar");
    $friends[1] = "Shiphrah";/*changing elements in a Array*/
    echo $friends[1]; 
    $friends[4] = "Shira";/*Adding an element in an array*/
    echo $friends[4];
    echo "<br";
    echo count($friends);/*counting the number elemnts in an array*/
    /*Associative array: A special tye of arraywher not only can we use datavalues but we can used 
    what we call Key value pairs*/
    /*for example stoeing the marks of students on a school system*/
    echo "<br>";
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C-");/*Maps a value to a specific students name*/
    echo $grades["Oscar"];
    ?>


</body>
</html>