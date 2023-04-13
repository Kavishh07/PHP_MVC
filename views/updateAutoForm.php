<html>
<form action="" method="post">
    <!-- ID -->
    <p>ID: <input type="number" name="id" value="<?php echo $auto->id;?>" readonly></p>
    <!-- MERK -->
    <p>Merk <input type="text" name="merk" value="<?php echo $auto->merk;?>"></p>
    <!-- TYPE -->
    <p>Type <input type="text" name="type" value="<?php echo $auto->type;?>"></p>
    <!-- KENTEKEN -->
    <p>Kenteken <input type="text" name="kenteken" value="<?php echo $auto->kenteken;?>"></p>
    <!-- Knop -->
    <input type="submit" name="aanpasKnop"><br>
    <a href="index.php">Toch niet de auto veranderen?</a>
</form>
</html>
<?php
