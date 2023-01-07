<!--LEARNING PHP-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php /*PHP tag when intergrating into html*/
        echo("Hello world");
        echo "<h1> My site </h1>"; /*other tags can be written within the echo function*/
        echo "<hr>";
        echo "this is my page<br>";
      /*VARIABLES*/  
        $charactername = "John"; /*how to qrite a variable*/
        $characterage = 60;
        echo "There was once a man named $charactername <br>";
        echo "He was $characterage years old<br>";
        echo "he really liked the name $charactername <br>";
        echo " But didn't like being $characterage <br>";
      /*DATA TYPES*/  
        $phrase = "To be or not to be";/*STRING*/
        $age = 30;/*INTERGER*/
        $gpa = 30.0;/*DECIMAL*/
        $isMale = false;/*BOOLEAN*/
      /*functions which can help to findout information on the string*/
        $string = "Giraffe Academy";
        echo strlen($string);/*this gives us the length of the string*/
        echo "<br>";
        echo $string[0];/*shows the first caharacter in the string*/
        $string[4] = "z";/*changes the character on position 4 to z*/
        echo $string;
      /*replacing substrings whithin a string*/
      echo "<br>";
      $trial = "hello to everyone<br>";
      echo str_replace("llo", "Hi", $trial);
      echo substr($trial, 8);/*Prints the string from the index position given */
      echo substr($trial, 4, 4);/*prints the string from index position till number of places given or requested  */
      echo "<br";
      /*working with numbers>*/
        echo 5 + 9 ;/* simply prints oout the answer directly on the page */
        echo "<br>";
        echo 10 % 3;/*read as ten mod three the program displays the remainder of the division between */
        /*php follows BODMAS */
        echo "<br>";
        $num = 10;
        $num++;
        echo $num;
        echo "<br>";
        $num = $num + 25;
        echo $num;
        echo "<br>";
        echo abs(-100);/*absolute value of a num */
        echo "<br>";
        echo pow(2, 4);/**number raised to a power */
        echo "<br>";
        echo sqrt(3);/**to find the squarerot of a number */
        echo "<br>";
        echo max(2,10);/**for max num same for minimum */
        echo "<br>";
        echo round(3.7);/**roundas up or down */
        echo "<br>";
        echo floor(3.9); /**always rounds down */

      /**GETTING USER INPUT */
        
    ?>
    

</body>
</html>