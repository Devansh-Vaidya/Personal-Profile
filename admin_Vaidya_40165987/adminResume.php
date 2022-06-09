<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
    if (isset($_POST['resumeButton'])) {
        $resumePg = fopen("../resumePageInfo.txt", "w");
        fwrite($resumePg, $_POST['educational-qualifications'] . "\n\n" . $_POST['skill-set'] . "\n\n" . $_POST['awards-recognitions'] . "\n\n" . $_POST['work-experience'] . "\n\n" . $_POST['referees']);
        fclose($resumePg);
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            • Resume •
        </title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>

    <body>
        <table class="browse">
            <thead class="browse">
                <tr class="browse">
                    <td class="browse"><a href="adminIndex.php">HOME</a></td>
                    <th class="browse"><a href="adminResume.php">RESUME</a></th>
                    <td class="browse"><a href="adminProjects.php">PROJECTS</a></td>
                    <td class="browse"><a href="adminContact.php">CONTACT</a></td>
                    <td class="browse"><a href="adminSocial.php">SOCIAL</a></td>
                    <td class="browse"><a href="logout.php">LOGOUT</a></td>
                </tr>
            </thead>
        </table>
        <br />

        <form action="adminResume.php" method="post">
            <label for="#eduQual">Educational Qualifications:</label>
            <br />
            <textarea name="educational-qualifications" id="eduQual" cols="100" rows="5"></textarea>
            <br />
            <br />

            <label for="#skillSet">Skill Set:</label>
            <br />
            <textarea name="skill-set" id="skillSet" cols="100" rows="5"></textarea>
            <br />
            <br />

            <label for="#awards">Awards/Recognitions:</label>
            <br />
            <textarea name="awards-recognitions" id="awards" cols="100" rows="5"></textarea>
            <br />
            <br />

            <label for="#workExp">Work Experience/Volunteer Work:</label>
            <br />
            <textarea name="work-experience" id="workExp" cols="100" rows="5"></textarea>
            <br />
            <br />

            <label for="#ref">Referees:</label>
            <br />
            <textarea name="referees" id="ref" cols="100" rows="5"></textarea>
            <br />
            <br />

            <input type="submit" value="Submit" id="resumeButton" name="resumeButton" />
        </form>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    </body>

    </html>