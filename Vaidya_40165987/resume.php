<?php
session_start();
if (file_exists('../resumePageInfo.txt')) {
    $infoFile = fopen("../resumePageInfo.txt", 'r');
    if (filesize('../resumePageInfo.txt') > 0) {
        $array = explode("\n\n", fread($infoFile, filesize('../resumePageInfo.txt')));
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
        • Resume •
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <td><a href="index.php">HOME</a></td>
                <th><a href="resume.php">RESUME</a></th>
                <td><a href="projects.php">PROJECTS</a></td>
                <td><a href="contact.php">CONTACT</a></td>
                <td><a href="social.php">SOCIAL</a></td>
                <td><a href="admin.php">ADMIN</a></td>
            </tr>
        </thead>
    </table>

    <dl>
        <dt style="padding-block: 10px;">Education and Qualifications:-</dt>
        <?php
        if ($_SESSION["array"][0] == null || trim($_SESSION["array"][0], " ") == "") {
            echo    "<dd>Completed 12<sup>th</sup> grade in 2020 with a score of 91.25%</dd>
                            <dd>Completed 10<sup>th</sup> grade in 2018 with a score of 82.80%</dd>";
        } else {
            $arrParts = explode("\n", $_SESSION["array"][0]);
            for ($i = 0; $i < count($arrParts); $i++) {
                if (strlen($arrParts[$i] > 0)) {
                    echo    "<dd>" . $arrParts[$i] . "</dd>";
                }
            }
        }
        ?>
    </dl>

    <dl>
        <dt style="padding-block: 10px;">Professional and Technical Skills:-</dt>

        <?php
        if ($_SESSION["array"][1] == null || trim($_SESSION["array"][1], " ") == "") {
            echo    "<dd>Good command over Java Programming Language.</dd>
                            <dd>Basic knowledge of XHTML and CSS.</dd>
                            <dd>Know how to work on Visual Studio Code and Eclipse Environment.</dd>";
        } else {
            $arrParts = explode("\n", $_SESSION["array"][1]);
            for ($i = 0; $i < count($arrParts); $i++) {
                if (strlen($arrParts[$i] > 0)) {
                    echo    "<dd>" . $arrParts[$i] . "</dd>";
                }
            }
        }
        ?>
    </dl>

    <div style="padding: 0px; text-align: left">Achievements:-</div>
    <ol>
        <?php
        if ($_SESSION["array"][2] == null || trim($_SESSION["array"][2], " ") == "") {
            echo    "<li>Got 3<sup>rd</sup> Prize in 'Marketing Video' in 'Innovative Product and Marketing' an interschool event</li>
                            <li>'Innovative Product' runner up in 'Innovative Product and Marketing' an interschool event</li>";
        } else {
            $arrParts = explode("\n", $_SESSION["array"][2]);
            for ($i = 0; $i < count($arrParts); $i++) {
                if (strlen($arrParts[$i] > 0)) {
                    echo    "<li>" . $arrParts[$i] . "</li>";
                }
            }
        }
        ?>
    </ol>

    <div style="padding: 0px; text-align: left;">Work Experience/Volunteer Work:-</div>
    <ol>
        <?php
        if ($_SESSION["array"][3] == null || trim($_SESSION["array"][3], " ") == "") {
            echo    "<li>
                    100 Trees Initiative in August 2019
                    Worked towards green initiative
                    Planted 100 trees as a part of the team
                    </li>
                    <li>
                    Helping Underprivileged Children in December 2019
                    Donated stationery items
                    Did fun activities with them during the entire day
                    Organized and had lunch and snacks with them
                    </li>";
        } else {
            $arrParts = explode("\n", $_SESSION["array"][3]);
            for ($i = 0; $i < count($arrParts); $i++) {
                if (strlen($arrParts[$i] > 0)) {
                    echo    "<li>" . $arrParts[$i] . "</li>";
                }
            }
        }
        ?>
    </ol>

    <dl>
        <dt style="padding: 10px">References:-</dt>
        <?php
        if ($_SESSION["array"][4] == null || trim($_SESSION["array"][4], " ") == "") {
            echo    "<dd>Dr. Vimal Bhuva</dd>
                            <dd>Ms. Priti Dave</dd>
                            <dd>Dr. Mayank Agrawal</dd>";
        } else {
            $arrParts = explode("\n", $_SESSION["array"][4]);
            for ($i = 0; $i < count($arrParts); $i++) {
                if (strlen($arrParts[$i] > 0)) {
                    echo    "<dd>" . $arrParts[$i] . "</dd>";
                }
            }
        }
        ?>
    </dl>
    <br />
    Download Full CV:
    <a href="../Devansh_Vaidya Resume.pdf" download="">
        <button onclick="dwnFile()" id="resumeButton">Download</button>
    </a>
</body>

</html>