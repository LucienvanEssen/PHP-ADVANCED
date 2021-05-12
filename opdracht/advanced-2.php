<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            border: black solid <?php echo $_POST['tabelRandDikte'] ?>px;
            background-color: white;
        }

        th,
        td {
            color: <?php echo $_POST['tekstKleuren'] ?>;
            padding: <?php echo $_POST['celPadding'] ?>px;
        }

        body {
            background-color: <?php echo $_POST['achtergrondKleuren'] ?>;
        }
    </style>
</head>

<body>
    <?php
    $gegevens = array("Naam" => "Lucien", "Woonplaats" => "Amstelveen", "Leeftijd" => 21);
    ?>
    <table>
        <tr>
            <th>key</th>
            <th>value</th>
        </tr>
        <?php
        foreach ($gegevens as $key => $value) {
            maakRij($key, $value);
        }
        ?>
    </table>
</body>

</html>

<?php function maakRij($key, $value)
{
    echo
    "<tr>
   <td>$key</td>
   <td>$value</td>
   </tr>";
} ?>