<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="blomma.css">
        <title></title>
    </head>
    <body>
        <?php
        foreach (glob("liten/*.jpg") as $filename) {
            $tmp = strlen($filename) - 14;
            $linkpath = $filename;
            echo '<div>' . "<a href='$linkpath'><img title='$tmp' src='$filename'></a>";
            echo '<p>' . substr($filename, 10, $tmp) . '</p>' . '</div>';
        }
        
 
        
        
        ?>


    </body>
</html>
