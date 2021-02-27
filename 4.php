<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border = "2">
            <tbody>
                <?php 
                    for ($i = 1; $i <= 12; $i++) {
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<tr>";
                            for ($j = 1; $j <= 12; $j++) {
                                echo "<td>$j * $i = ".$j * $i."</td>";
                            }
                            echo "</tr>";
                        }
                    }?>
            </tbody>
        </table>
    </body>
    </html>