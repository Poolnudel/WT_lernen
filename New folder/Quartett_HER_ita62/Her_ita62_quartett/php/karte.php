<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/karte.css">
    <title>Quartett</title>
    
</head>
<body>

    
<?php

    $file = fopen('../csv/data.csv', 'r');
        while($line = fgetcsv($file, 2000, ';')) {
            ?>
            
        <div class = "karte">

            <div class = "typ">
                <?php echo $line[0];?>
            </div>
                
            <table>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $line[2]; ?></td>
                    </tr>
                    <tr>
                        <td>Team</td>
                        <td><?php echo $line[3]; ?></td>
                    </tr>
                    <tr>
                        <td>Alter</td>
                        <td><?php echo $line[4]; ?></td>
                    </tr>
                    <tr>
                        <td>Rennen insgesammt</td>
                        <td><?php echo $line[5]; ?></td>
                    </tr>
                    <tr>
                        <td>Siege</td>
                        <td><?php echo $line[6]; ?></td>
                    </tr>
                    <tr>
                        <td>Pole</td>
                        <td><?php echo $line[7]; ?></td>
                    </tr>
                    <tr>
                        <td>Punkte gesammt</td>
                        <td><?php echo $line[8]; ?></td>
                    </tr>
                </table>
                <img src="../img/<?php echo str_replace(' ','',strtolower($line[1]));?>.png" alt="<?php echo $line[0];?>">
            </div>

            <?php
        }
    fclose($file);

    ?>
    <div class = "link2">
     <a href="quartette.php">Zurück zu den Quartetten </a>
    </div>
</body>
</html>