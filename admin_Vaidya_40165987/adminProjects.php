<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
    if (isset($_POST['projButton'])) {
        $projectPg = fopen("../projectsPageInfo.txt", "w");
        fwrite($projectPg, $_POST['projects']);
        fclose($projectPg);
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            • Projects •
        </title>
        <link rel="stylesheet" href="stylesheet.css" />
        <style>
            li {
                margin-bottom: 3%;
            }
        </style>
    </head>

    <body>
        <table class="browse">
            <thead class="browse">
                <tr class="browse">
                    <td class="browse"><a href="adminIndex.php">HOME</a></td>
                    <td class="browse"><a href="adminResume.php">RESUME</a></td>
                    <th class="browse"><a href="adminProjects.php">PROJECTS</a></th>
                    <td class="browse"><a href="adminContact.php">CONTACT</a></td>
                    <td class="browse"><a href="adminSocial.php">SOCIAL</a></td>
                    <td class="browse"><a href="logout.php">LOGOUT</a></td>
                </tr>
            </thead>
        </table>
        <br />

        <form action="adminProjects.php" method="post">
            <label for="#myProj">My Projects:</label>
            <br />
            <textarea name="projects" id="myProj" cols="100" rows="5"></textarea>
            <br />
            <br />
            <input type="submit" value="Submit" id="projButton" name="projButton" />
        </form>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    </body>

    </html>