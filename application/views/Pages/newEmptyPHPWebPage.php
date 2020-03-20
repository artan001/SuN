<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TestConnect</title>
    </head>
    <body>
        <?php
        foreach ($page as $value){
//            echo $value->s_name."<br>";
            foreach ($value as $value2){
                echo "<p>".$value2."<p>";
            }
        }
        ?>
    </body>
</html>
