<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="advanced-2.php" method="post">

        <label for="tabelRandDikte">Tabelranddikte (px):</label><input type="number" name="tabelRandDikte" id="tabelRandDikte">

        <label for="celPadding">Celpadding (px):</label><input type="number" name="celPadding" id="celPadding">

        <label for="achtergrondKleuren">Kies een achtergrondkleur:</label>
        <select name="achtergrondKleuren" id="achtergrondKleuren">
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            foreach ($kleuren as $kleurenOptie) {
                echo "<option value='$kleurenOptie'>$kleurenOptie</option>";
            }
            ?>
        </select>

        <label for="tekstKleuren">Kies een tekstkleur:</label>
        <select name="tekstKleuren" id="tekstKleuren">
            <?php
            foreach ($kleuren as $kleurenOptie) {
                echo "<option value='$kleurenOptie'>$kleurenOptie</option>";
            }
            ?>
        </select>

        <input type="submit" value="verstuur">
    </form>
</body>

</html>