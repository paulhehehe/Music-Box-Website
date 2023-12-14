<!-- Author:  -->
<!-- Student ID:  -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: userReg.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: Assignment 02 landing page -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group Work">
    <meta name=" description " content=" Assignment 2 CST8285 Web Programming ">
    <meta name=" keywords " content=" CSS, HTML, JavaScript, PHP, CST8285, Web Programming ">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:400" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
    <title>MusicBox - User Register</title>
    <link rel="stylesheet" type="text/css" href="./jumping.css">
</head>

<body>
    <?php

    $server_name = "localhost";
    $database_name = "assignment2";
    $user_name = "test";
    $user_password = "test";

    $connection = new mysqli($server_name, $user_name, $user_password, $database_name) or die($connection->connect_error);

    // Check if the form was submitted before executing the query
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Use prepared statements to prevent SQL injection
        $stmt = $connection->prepare("INSERT INTO user (user_name, email, password) VALUES (?, ?, ?)");

        // Check if the prepare() method succeeded
        if ($stmt === false) {
            die("Error: " . $connection->error);
        }

        // Bind the input values to the prepared statement
        $stmt->bind_param("sss", $_POST['login'], $_POST['email'], $_POST['pass']);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<p class="jumping">You have successfully signed-up...Please go to sign in...</p>';
            $stmt->close();
            $connection->close();

            // Wait for 2 seconds and then redirect to another page using JavaScript
            echo '<script>
                setTimeout(function() {
                    window.location.href = "../index.html";
                }, 2000); // 1 seconds delay
              </script>';
            exit; // Make sure to exit the script to prevent further execution
        } else {
            echo "<p class='jumping'>Error: Try another username or email...</p>";
            echo '<script>
                setTimeout(function() {
                    window.location.href = "../public/registration.html";
                }, 2000); // 1 seconds delay
              </script>';
        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $connection->close();
    ?>
    <footer>
        <!--<p id="CopyRight">Author: GROUP  Date: 2023-06-30 &copy;all copyright reserved</p>-->
    </footer>
</body>

</html>