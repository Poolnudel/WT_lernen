<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/karte.css">
    <title>Quartett</title>
    <link rel="icon" type="image/png" href="../img/icon.png">
</head>

<body>

    <?php
    $typ = $_SERVER["QUERY_STRING"];
    $file = fopen('../csv/data.csv', 'r');
    while ($line = fgetcsv($file, 2000, ';')) {
        if (strtolower($line[0]) == $typ) {
    ?>
            <div class="karte">

                <div class="typ">
                    <?php echo $line[0]; ?>
                </div>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $line[1]; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $line[2]; ?></td>
                    </tr>
                    <tr>
                        <td>Länge</td>
                        <td><?php echo $line[3]; ?></td>
                    </tr>
                    <tr>
                        <td>Höhe</td>
                        <td><?php echo $line[4]; ?></td>
                    </tr>
                    <tr>
                        <td>Gewicht</td>
                        <td><?php echo $line[5]; ?></td>
                    </tr>
                </table>
                <img src="../img/<?php echo str_replace(' ', '', strtolower($line[1])); ?>.png" alt="<?php echo $line[1]; ?>">
            </div>
    <?php
        }
    }
    fclose($file);
    ?>
    <div class="link">
    <a href="quartette.php">Zurück zu den Quartetten </a>
    </div>
</body>

</html>