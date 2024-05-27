<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "college_trip";

    // Create a database connection
    $con = new mysqli($server, $username, $password, $database);

    // Check for connection success
    if ($con->connect_error) {
        die("Connection to this database failed: " . $con->connect_error);
    }

    // Collect post variables
    $name = $con->real_escape_string($_POST['name']);
    $gender = $con->real_escape_string($_POST['gender']);
    $age = $con->real_escape_string($_POST['age']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $desc = $con->real_escape_string($_POST['desc']);

    // Prepare SQL query
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // Execute the query
    if ($con->query($sql) === true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br>" . $con->error;
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
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Welcome to Techno International New Town</h1>
        <h1>Admission Form</h1>
        <p>Enter your details and submit the form to confirm your availability</p>

        <?php
        if ($insert == true) {
            echo "<p class='AfterSubmit'>Thank you for submitting the form. We are happy to see you joining for the Jakarta Trip</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="Enter your age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your Email ID" required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone Number" required>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other details here"
                required></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>