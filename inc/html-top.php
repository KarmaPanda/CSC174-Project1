<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 1</title>
    <?php echo $customCSS ?>
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
    <?php
        if ($customNav != "") {
            echo $customNav;
        }
        else
        {
            echo "<link rel='stylesheet' type='text/css' href='css/nav.css'>";
        }
    ?>
</head>