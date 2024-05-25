<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 80%;
        background-color: yellow;
        margin: auto;
        padding: 25px;
    }
</style>
<body>
    <div class="container">
        <h1>More about PHP</h1>
        <p> Your voting status is here </p>
        <?php
            echo "If-else condition";
            $age = 9;

            if ($age >18) {
                # code...
                echo "<br> Allowed to vote";
            }
            elseif ($age < 10) {
                # code...
                echo "<br> Your age is just $age which is less than 10";
            }
            else {
                # code...
                echo "<br> Not Allowed to vote";
            }
            
            //Arrays in PHP 

            $languages = array("Python","PHP","C++","Java");

            echo "<br>The first element of the array is:";
            echo $languages[0];
            echo "<br>";
            echo"The number of elements in the array is";
            echo "<br>";
            echo count($languages);

            // Loops in PHP

            echo "<br> While Loop Implementation";
            $a = 1;
            while ($a <= 5) {
                # code...
                echo "<br> The value of a is : $a";
                $a++;
            }

            // Iterating Array through while loop

            echo "<br> Array through WHILE loop";
            $a = 0;
            while ($a < count($languages)) {
                # code...
                echo "<br> The element of the array is : $languages[$a]";
                $a++;
            }

            //DO-While Loop

            echo "<br> Iterating Array Using Do-while Loop";
            $a = 0;
            do {
                # code...
                echo "<br> The element of the array is : $languages[$a]";
                $a++;

            } while ($a < count($languages));

            
            // For loop

            echo "<br> Iterating through for loop";
            for ($i=0; $i < 5; $i++) { 
                # code...
                echo"<br> The value of i is :$i";
            }
            
            //Foreach
            foreach ($languages as $value) {
                # code...
                echo"<br> The element of array is: $value";
            }

            Function Phone_Number($ph){
                echo"<br> Your Phone Number is : $ph";
            }

            Phone_Number(100);


        ?>

    </div>
    
</body>
</html>