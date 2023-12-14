<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: logout.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: logout.php -->
<!DOCTYPE html>
<html>

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
    <title>MusicBox - Logout</title>
    <link rel="stylesheet" type="text/css" href="./jumping.css">
</head>

<body>
    <?php
    echo '<p class="jumping">You have been logged out!</p>';

    echo '<script>
            // Redirect to the third page after a 3-second delay
            setTimeout(function () {
                window.location.href = "../index.html";
            }, 2000);
        </script>';


    ?>
    <footer>
        <!--<p id="CopyRight">Author: GROUP  Date: 2023-06-30 &copy;all copyright reserved</p>-->
    </footer>
    <!-- JavaScript to handle the redirection to the third page -->

</body>

</html>