<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
    if (isset($_POST['logoutButton'])) {
        session_destroy();
        header("Location: ../Vaidya_40165987/admin.php");
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            • Log Out •
        </title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
        <table class="browse">
            <thead class="browse">
                <tr class="browse">
                    <td class="browse"><a href="adminIndex.php">HOME</a></td>
                    <td class="browse"><a href="adminResume.php">RESUME</a></td>
                    <td class="browse"><a href="adminProjects.php">PROJECTS</a></td>
                    <td class="browse"><a href="adminContact.php">CONTACT</a></td>
                    <td class="browse"><a href="adminSocial.php">SOCIAL</a></td>
                    <th class="browse"><a href="logout.php">LOGOUT</a></th>
                </tr>
            </thead>
        </table>
        <br />
        <form action="logout.php" method="post">
            <input name="logoutButton" type="submit" value="Logout" id="clearButton" />
        </form>
        <script src="main.js" type="text/javascript"></script>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    </body>

    </html>