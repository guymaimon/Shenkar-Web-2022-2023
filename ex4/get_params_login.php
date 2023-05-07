<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        Welcome 
        <?php
            $un = $_GET["reg_un"];
            $pw = $_GET["reg_pass"];

            if ($un == "Guy" && $pw == "111")
                echo "<h2>Good Morning user " . $un . "</h2>";
            else
                echo "<h2> Who Are You ? </h2>"
        ?>
    </section>
</body>
</html>