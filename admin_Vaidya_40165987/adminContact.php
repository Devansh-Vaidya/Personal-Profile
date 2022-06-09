<?php
session_start();
if ($_SESSION['uname'] == "Devansh") {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            • Contact Me •
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
                    <th class="browse"><a href="adminContact.php">CONTACT</a></th>
                    <td class="browse"><a href="adminSocial.php">SOCIAL</a></td>
                    <td class="browse"><a href="logout.php">LOGOUT</a></td>
                </tr>
            </thead>
        </table>
        <br />

        <div id="contact"></div>

        <br />
        <table>
            <tr>
                <td class="contTable">
                    <input type="file" id="uploadFile" />
                </td>
            </tr>
            <tr>
                <td class="contTable">
                    <button onclick="loadFile()">Click to upload</button>
                </td>
            </tr>
        </table>
        <script src="../main.js" type="text/javascript"></script>
    <?php
} else {
    echo "<h1><a href=\"../Vaidya_40165987/admin.php\" style=\"color:none\">Please Login</a></h1>";
}
    ?>
    </body>

    </html>