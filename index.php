<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `college_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page for Travel Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <img class = "bg" src="bg.png" alt="Colleege background"> -->
    <div class="container">
        <h1>Welcome to Techno International New Town</h1> 
        <h1> Jakarta Trip Form</h1>
        <p>Enter your details and submit the form to confirm your availability </p>

        <?php
        if($insert == true){
        echo "<p class='AfterSubmit'>Thank you for sumitting the form. We are happy to see you joining for the Jakarta Trip</p>";
        }
        ?>
            <form action="index.php" method="post">
                <input type="text" name="Name" id="name" placeholder="Enter your name">
                
                <input type="text" name="Age" id="age" placeholder="Enter your age">
                
                <input type="text" name="Gender" id="gender" placeholder="Enter your gender">
                
                <input type="email" name="Email" id="email" placeholder="Enter your Email ID">
                
                <input type="phone" name="Phone" id="phone" placeholder="Enter your Phone Number">
        
                <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        
                <button class="btn">Submit</button>
                <!-- <button class="btn">Reset</button> -->
                
            </form>
    </div>
    <script src="index.js"></script>


    

</body>
</html>