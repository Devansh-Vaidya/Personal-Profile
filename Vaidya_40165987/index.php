<?php
session_start();
if (file_exists('../indexPageInfo.txt')) {
    $infoFile = fopen("../indexPageInfo.txt", 'r');
    if (filesize('../indexPageInfo.txt') > 0) {
        $array = explode("\n\n", fread($infoFile, filesize('../indexPageInfo.txt')));
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
        Home Page
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th><a href="index.php">HOME</a></th>
                <td><a href="resume.php">RESUME</a></td>
                <td><a href="projects.php">PROJECTS</a></td>
                <td><a href="contact.php">CONTACT</a></td>
                <td><a href="social.php">SOCIAL</a></td>
                <td><a href="admin.php">ADMIN</a></td>
            </tr>
        </thead>
    </table>
    <div>
        <br />
        <br />
        <img src="devansh_vaidya.JPEG" alt="Web Developer Image" style="width: 200px; align-items: center;" />
        <br />
        <br />
    </div>
    <div>

        <?php
        if ($_SESSION["array"][0] == null) {
            echo "I am a career-driven, self-learner, and hardworking student and aim to excel in my academics while learning new skills. My goal is to 
                    contribute to Machine Learning, specifically in Artificial Intelligence.";
        } else {
            echo $_SESSION["array"][0];
        }
        ?>
    </div>
    <br />
    <br />
    <br />

    <fieldset style="border-color: #A239CA;">
        <legend style="text-align: center;">&nbsp; Know the Creator &nbsp;</legend>
        <p style="text-align: justify;">
            <?php
            if ($_SESSION["array"][1] == null) {
                echo "My name is Devansh Vaidya, and I am pursuing Bachelor's in Computer Science at Concordia University, Montreal. I have developed 
                        a good command of the Java programming language and have solid problem-solving skills and logical thinking. I am an eager 
                        self-learner and always in search of some new knowledge.";
            } else {
                echo $_SESSION["array"][1];
            }
            ?>
        </p>
    </fieldset>
</body>

</html>