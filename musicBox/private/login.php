<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: login.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: login.php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group Work">
    <meta name=" description " content=" Assignment 2 CST8285 Web Programming ">
    <meta name=" keywords " content=" CSS, HTML, JavaScript, PHP, CST8285, Web Programming ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800|Work+Sans:400" rel="stylesheet">
    <title>MusicBox - Login</title>
    <link rel="stylesheet" type="text/css" href="./jumping.css">
</head>

<body>

    <?php

    $server_name = "localhost";
    $database_name = "assignment2";
    $user_name = "test";
    $user_password = "test";

    $connection = new mysqli($server_name, $user_name, $user_password, $database_name) or die($connection->connect_error);

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the submitted username and password from the form
        $username = $_POST['login'];
        $password = $_POST['pass'];

        // Prepare the SQL query with placeholders to prevent SQL injection
        $sql = "SELECT * FROM user WHERE(user_name = ? AND password = ?) OR (email = ? AND password = ?)";

        // Use prepared statements to bind the parameters securely
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssss", $username, $password, $username, $password);

        // Execute the query
        if ($stmt->execute()) {
            // Check if any matching row was found
            $result = $stmt->get_result();
            if ($result->num_rows >= 1) {
                // if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $id_user = $row['ID_user'];
                $username_ = $row['user_name'];

                // Display jump message
                echo '<p class="jumping">You have successfully logged in...We are taking you to your page...</p>';


                // JavaScript to redirect after 2 seconds
                echo '<script>
        setTimeout(function() {
            window.location.href = "user.php?username=' . urlencode($username_) . '&id=' . urlencode($id_user) . '";
        }, 1000); // 1000 milliseconds = 2 seconds
    </script>';

                exit();
            } else {
                // Invalid login, show an error message
                echo "<p class='jumping'>Invalid username or password. Please try again.</p>";
                echo '<script>
                setTimeout(function() {
                    window.location.href = "../index.html";
                }, 2000); // 1 seconds delay
              </script>';
                exit;
            }
        } else {
            // Query execution failed
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $connection->close();
    ?>

    <footer>
        <p id="CopyRight">Author: Lei Zhao, Zhicheng He, Yuling Guo, Yu Song Date: 2023-08-03 &copy;All copyright reserved</p>
    </footer>
</body>

</html>