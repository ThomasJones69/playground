<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script>
            function fire(f) {
                if (f == 75) {
                    document.getElementById("point" + f).style.backgroundColor = 'red';
                } else {
                    document.getElementById("point" + f).style.backgroundColor = 'green';
                }
            }
        </script>

        <style>
            table {
                border-collapse: collapse;
                background-color:lightblue;
                cursor: crosshair;
            }
        </style>

    </head>
    <body>

        <table border="1">
            <?php
            for ($x = 1; $x < 11; $x++) {
                echo "<tr>";
                for ($y = 1; $y < 11; $y++) {
                    echo "<td onclick='fire($x$y)' id=point$x$y>Check</td>\n";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <hr>
    </body>
</html>
