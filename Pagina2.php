<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nombre = $_REQUEST['nombre'];
        $_lastname = $_REQUEST['lastName'];
        echo "<h4>Full Name: </h4>" . $nombre . " ";
        echo $_lastname . "<br>";

        $_mail = $_REQUEST['Email'];
        echo "<h4>Email:</h4> ";
        echo $_mail . "<br>";

        $_phone = $_REQUEST['phone'];
        echo "<h4>Number Phone:</h4>";
        echo $_phone . "<br>";


        $_Comentario = $_REQUEST['txtArea'];
        echo "<h4>Comment</h4> ";
        echo "<textarea>$_Comentario</textarea>";
        ?>
    </body>
</html>
