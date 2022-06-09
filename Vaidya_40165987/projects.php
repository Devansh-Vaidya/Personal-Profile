<?php
session_start();
if (file_exists('../projectsPageInfo.txt')) {
    $infoFile = fopen("../projectsPageInfo.txt", 'r');
    if (filesize('../projectsPageInfo.txt') > 0) {
        $read = trim(fread($infoFile, filesize('../projectsPageInfo.txt')), " \n\r");
        $array = explode("\n\r", $read);
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
        • Projects •
    </title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        li {
            margin-bottom: 3%;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="resume.php">RESUME</a></td>
                <th><a href="projects.php">PROJECTS</a></th>
                <td><a href="contact.php">CONTACT</a></td>
                <td><a href="social.php">SOCIAL</a></td>
                <td><a href="admin.php">ADMIN</a></td>
            </tr>
        </thead>
    </table>

    <h1>My Projects</h1>
    <ol style="text-align: justify;" reversed="reversed" type="I">
        <?php
        if ($_SESSION["array"][0] == null) {
            echo "<li>
                        Creating Professional Portfolio
                        <br />
                        <hr style=\"border-color: #A239CA;\" />
                        More about the project:-
                        <br />
                        This portfolio showcases all my professional responsibilities and qualifications. Primarily, in creating this portfolio 
                        I will employ my XHTML and CSS skills that I have learnt over the year.
                    </li>
                    <li>
                        Designing software system to transmit data using Hamming Code 2021 (Academic)
                        <br />
                        Concordia University, Montreal, QC
                        <hr style=\"border-color: #A239CA;\" />
                        More about the project:-
                        <br />
                        The main objective of this project was to make us familiar with how the software works to transmit data along 
                        with error detection and correction bits. Implementing the MARIE machine architecture and assembly language to 
                        transmit data bits. Helped improve knowledge in key topics of System hardware such as the transmission of data, 
                        using CRC code and Hamming code to check error detection and correction, and execution of it in a circuit using 
                        a combination of hardware and software.
                    </li>
                    <li>
                        Creating Casino Royale Game using Java 2018 (Academic)
                        <br />
                        S.N.Kansagra School, Rajkot, Gujarat
                        <hr style=\"border-color: #A239CA;\" />
                        More about the project:-
                        <br />
                        In this project, we created two multiplayer games – Blackjack and High-Low through Java programming language. The 
                        main objective of this project was to implement the knowledge gained in object-oriented programming.
                    </li>";
        } else {
            for ($i = 0; $i < count($_SESSION["array"]); $i++) {
                if (trim($_SESSION["array"][$i], " ") != "")
                    echo "<li>" . trim($_SESSION["array"][$i], " ") . "</li>";
            }
        }
        ?>
    </ol>
</body>

</html>