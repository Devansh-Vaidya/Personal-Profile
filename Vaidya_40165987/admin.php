<?php
if ($_POST['username'] == "admin" && $_POST['password'] == "123456") {
    session_start();
    $_SESSION['uname'] = "Devansh";
} else {
    $_SESSION['uname'] = "None";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        • Log In •
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body style="text-align: center">
    <table>
        <thead>
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="resume.php">RESUME</a></td>
                <td><a href="projects.php">PROJECTS</a></td>
                <td><a href="contact.php">CONTACT</a></td>
                <td><a href="social.php">SOCIAL</a></td>
                <th><a href="admin.php">ADMIN</a></th>
            </tr>
        </thead>
    </table>
    <br />
    <br />
    <?php

    ?>
    <form action="admin.php" method="post">
        Username:
        <input id="uname" type="text" name="username" placeholder="Enter your username" style="width: 150px; height: 15px; text-align: justify;" required />
        <br />
        <br />
        Password:
        <input id="pword" type="password" name="password" placeholder="Password" style="width: 150px; height: 15px; text-align: justify;" required />
        <br />
        <br />
        <input type="submit" name="submitButton" value="Log In" style="text-align: center;" onclick="processLogin()" />
    </form>
    <script src="../main.js" type="text/javascript"></script>
</body>

</html>