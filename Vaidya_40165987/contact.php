<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        • Contact Me •
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="resume.php">RESUME</a></td>
                <td><a href="projects.php">PROJECTS</a></td>
                <th><a href="contact.php">CONTACT</a></th>
                <td><a href="social.php">SOCIAL</a></td>
                <td><a href="admin.php">ADMIN</a></td>
            </tr>
        </thead>
    </table>
    <h2>
        Get in touch:
    </h2>
    <form>
        <p style="text-align:left; margin:0.5%">
            Name:
            <br />
            <input id="name" type="text" name="name" placeholder="Enter your name" required />
            <br />
            <br />
            Email ID:
            <br />
            <input id="email" type="email" name="email" placeholder="Enter your email" required />
            <br />
            <br />
            Phone Number:
            <br />
            <input id="number" type="tel" name="number" placeholder="Enter your number" required />
            <br />
            <br />
            Message:
            <br />
            <textarea id="msg" name="message_box" cols="30" rows="10" placeholder="Please leave your message here." required></textarea>
        </p>
        <input type="submit" name="contButton" value="Submit" style="text-align: center;" onclick="submitContactMsg()" />
    </form>

    <script src="../main.js" type="text/javascript"></script>
</body>

</html>