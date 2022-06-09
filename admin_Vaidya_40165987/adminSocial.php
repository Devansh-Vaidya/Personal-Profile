<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
    if (isset($_POST['socButton'])) {
        $socialPg = fopen("../socialPageInfo.txt", "w");
        fwrite($socialPg, $_POST['socLink1'] . "\n\n" . $_POST['socLink2'] . "\n\n" . $_POST['socLink3']);
        fclose($socialPg);
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            • Connect with Me •
        </title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body style="text-align: center;">
        <table class="browse">
            <thead class="browse">
                <tr class="browse">
                    <td class="browse"><a href="adminIndex.php">HOME</a></td>
                    <td class="browse"><a href="adminResume.php">RESUME</a></td>
                    <td class="browse"><a href="adminProjects.php">PROJECTS</a></td>
                    <td class="browse"><a href="adminContact.php">CONTACT</a></td>
                    <th class="browse"><a href="adminSocial.php">SOCIAL</a></th>
                    <td class="browse"><a href="logout.php">LOGOUT</a></td>
                </tr>
            </thead>
        </table>
        <br />

        <form action="adminSocial.php" method="post">
            <label for="#socLink1">Social Link 1: (Facebook)</label>
            <br />
            <input name="socLink1" type="text" id="socLink1" />
            <br />
            <br />

            <label for="#socLink2">Social Link 2: (Twitter)</label>
            <br />
            <input name="socLink2" type="text" id="socLink2" />
            <br />
            <br />

            <label for="#socLink3">Social Link 3: (Instagram)</label>
            <br />
            <input name="socLink3" type="text" id="socLink3" />
            <br />
            <br />
            <input name="socButton" type="submit" value="Submit" id="socButton" />
        </form>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    </body>

    </html>