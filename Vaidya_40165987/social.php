<?php
session_start();
if (file_exists('../socialPageInfo.txt')) {
    $infoFile = fopen("../socialPageInfo.txt", 'r');
    if (filesize('../socialPageInfo.txt') > 0) {
        $array = explode("\n\n", fread($infoFile, filesize('../socialPageInfo.txt')));
        $_SESSION["array"] = $array;
    }
    fclose($infoFile);
} else {
    $_SESSION["array"] = null;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        • Connect with Me •
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body style="text-align: center;">
    <table>
        <thead>
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="resume.php">RESUME</a></td>
                <td><a href="projects.php">PROJECTS</a></td>
                <td><a href="contact.php">CONTACT</a></td>
                <th><a href="social.php">SOCIAL</a></th>
                <td><a href="admin.php">ADMIN</a></td>
            </tr>
        </thead>
    </table>
    <br />
    <br />
    <br />

    <h1>
        Let's Connect!
    </h1>
    <img src="social_media_icons.jpeg" alt="Connect on Social Media" usemap="#social_media" />
    <map name="social_media">

        <area shape='poly' coords='19,2,97,2,106,8,111,17,112,97,106,105,97,110,19,110,10,105,4,96,4,15,9,6' <?php
                                                                                                                if ($_SESSION["array"][0] != null)
                                                                                                                    echo "href=" . $_SESSION["array"][0];
                                                                                                                else
                                                                                                                    echo 'href="https://www.facebook.com/profile.php?id=100010073567859"';
                                                                                                                ?> alt="Facebook">

        <area shape='poly' coords='270,111,278,105,283,96,283,14,277,7,269,2,190,2,181,7,175,15,174,96,179,105,187,111' <?php
                                                                                                                        if ($_SESSION["array"][1] != null)
                                                                                                                            echo "href=" . $_SESSION["array"][1];
                                                                                                                        else
                                                                                                                            echo 'href="https://www.twitter.com/"';
                                                                                                                        ?> alt="Twitter">

        <area shape='poly' coords='97,170,106,175,112,184,113,264,108,273,99,278,19,278,10,273,4,264,4,186,9,177,17,171' <?php
                                                                                                                            if ($_SESSION["array"][2] != null)
                                                                                                                                echo "href=" . $_SESSION["array"][2];
                                                                                                                            else
                                                                                                                                echo 'href="https://www.instagram.com/devanshvaidya_11/"';
                                                                                                                            ?> alt="Instagram">
        <area shape='poly' coords='179,176,187,171,269,171,278,177,283,186,283,263,279,272,272,279,188,279,180,273,175,264,175,186' href="https://dribbble.com/" alt="Dribbble">
        <area shape='poly' coords='354,170,433,170,442,175,447,184,447,265,442,274,433,279,354,278,344,274,339,265,339,185,345,176' href="https://www.linkedin.com/in/devansh-vaidya/" alt="LinkedIn">
        <area shape='poly' coords='7,344,15,339,95,338,104,344,109,351,110,433,104,441,96,446,15,447,7,441,1,433,2,352' href="https://www.whatsapp.com/" alt="WhatsApp">
        <area shape='poly' coords='189,339,270,339,278,344,283,353,283,432,278,441,270,447,189,447,180,442,175,433,175,354,179,344' href="https://www.youtube.com/" alt="Youtube">
        <area shape='poly' coords='359,339,441,339,450,344,455,353,455,433,449,441,440,446,362,446,353,442,348,433,346,353,351,344' href="https://www.snapchat.com/" alt="Snapchat">
    </map>
</body>

</html>