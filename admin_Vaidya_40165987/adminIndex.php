<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
    if (isset($_POST['indexButton'])) {
        $indexPg = fopen('../indexPageInfo.txt', 'w');
        fwrite($indexPg, $_POST['profStat'] . "\n\n" . $_POST['briefBio']);
        fclose($indexPg);
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Home Page
        </title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
        <table class="browse">
            <thead class="browse">
                <tr class="browse">
                    <th class="browse"><a href="adminIndex.php">HOME</a></th>
                    <td class="browse"><a href="adminResume.php">RESUME</a></td>
                    <td class="browse"><a href="adminProjects.php">PROJECTS</a></td>
                    <td class="browse"><a href="adminContact.php">CONTACT</a></td>
                    <td class="browse"><a href="adminSocial.php">SOCIAL</a></td>
                    <td class="browse"><a href="logout.php">LOGOUT</a></td>
                </tr>
            </thead>
        </table>
        <br />

        <form action="adminIndex.php" method="post">
            <label for="profStat">Professional Statement:</label>
            <br />
            <textarea name="profStat" id="profStat" cols="100" rows="5"></textarea>
            <br />
            <br />

            <label for="briefBio">Brief Biography:</label>
            <br />
            <textarea name="briefBio" id="briefBio" cols="100" rows="5" name="briefBio"></textarea>
            <br />
            <br />

            <input type="submit" value="Submit" id="indexButton" name="indexButton" />
        </form>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    <script src="main.js" type="text/javascript"></script>
    </body>

    </html>