<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Date</title>
    </head>
    <body>
        <?php
        echo date('j F Y');
        ?>
        <br />
        <?php
        $people = array('Badar', 'Ali', 'Ahmed', 'Tagar');
        foreach ($people as $value) {
            echo "Person: " . $value . "<br />";
        }
        ?>
        <br />

        <a href="page.php">open page</a> 


    </body>
</html> 