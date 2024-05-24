<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP website

        <?php
           echo "<br>Hello World!!!! This is Printed using PHP";

           // Single Line Comment

           /* This
           is 
           a
           Multi
           Line
           Comment
           */
           //Variables in PHP

           $var1 = 30;
           $var2 = 25;

           echo "<br>" ;
           echo $var1;
           echo "<br>"; 
           echo $var2;


           //Operators in PHP

           //1. Arithmetic Operator
           // Addition
           echo "<br>";
           echo "The value of variable1 + variable2 is:";
           echo $var1 + $var2;

           //1. Arithmetic Operator
           // Subtraction
           echo "<br>";
           echo "The value of variable1 - variable2 is:";
           echo $var1 - $var2;

           //1. Arithmetic Operator
           // Multiplication
           echo "<br>";
           echo "The value of variable1 * variable2 is:";
           echo $var1 * $var2;

           //1. Arithmetic Operator
           //Division
           echo "<br>";
           echo "The value of variable1 / variable2 is:";
           echo $var1 / $var2;


           //2. Assignment Operator

           //Type  - 1

           $newvar = $var2;
           echo "<br>";
           echo "The assigned value to newvar is $newvar";

           //Type - 2

           $newvar += $var2;
           echo "<br>";
           echo "The assigned value to newvar is $newvar";

           //Type - 3

           $newvar -= $var2;
           echo "<br>";
           echo "The assigned value to newvar is $newvar";

           //Type - 3

           $newvar *= $var2;
           echo "<br>";
           echo "The assigned value to newvar is $newvar";

           //Type - 4
           $newvar /= $var2;
           echo "<br>";
           echo "The assigned value to newvar is $newvar";

           //3. Comparison Operator

           //Type - 1

           echo "<br>";
           echo "The value of 1==4 is";
           echo var_dump(1==4);

           //Type - 2

           echo "<br>";
           echo "The value of 1<=5 is";
           echo var_dump(1<=5);
           
           //Type - 3 
           
           echo "<br>";
           echo "The value of 1>=5 is";
           echo var_dump(1>=5);

           //4.Increment Operator

           echo "<br>";
           echo $var1++;
           
           echo "<br>";
           echo $var1--;

           echo "<br>";
           echo ++$var1 ;
           
           echo "<br>";
           echo --$var1 ;

           //5. Logical Operator

           echo"<br>";
           $newvar = (true AND true);
           echo var_dump($newvar);
           
           echo"<br>";
           $newvar = (true XOR true);
           echo var_dump($newvar);


        ?>

        <?php
        define ('PI',3.14);

        //Data Types in PHP

        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Bool
        // 5. Array
        // 6. Object

        echo "<br> DATA types in PHP";
        $myvar = "This is a string";
        echo "<br>";
        echo var_dump($myvar);

        $myvar = 87.1;
        echo "<br>";
        echo var_dump($myvar);

        $myvar = false;
        echo "<br>";
        echo var_dump($myvar);
        
        //Constant 
        echo"<br>";
        echo PI;
        ?>
    </div>
</body>
</html> 