<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    * {
        margin: 5px;
        padding: 5px;
        box-sizing: border-box;
    }

    .container {
        max-width: 60%;
        background-color: rosybrown;
        margin: auto;
        padding: 25px;
    }
</style>

<body>
    <div class="container">
        <?php
            echo "HELLO <br>";

            //String Manipulation
            $str = "This";
            echo $str;

            //Length of the string
            $length = strlen($str);
            echo "<br> The length of the string is : $length";

            //Concatenation

            $str1 = "I am";
            $str2 = " a Student";

            echo "<br>";
            echo "The concatenated string is : ";
            echo $str1.$str2;

            echo "<br> The number of words in the first string is : ". str_word_count($str);

            $str3 = "This a string ";
            echo "<br> The original string is : $str3";
            echo "<br> The reversed string is :". strrev($str3); 

            echo "<br> The position of 'a' in the third string is : ". strpos($str3,"a");
        ?>
    </div>
</body>

</html>