<!DOCTYPE html>
<html>
<head>
    <title>mvc 87276 Kavish Soman d2c</title>

</head>
<body>
<style>
    body{
        font-family: impact;
        margin: 2px;
        padding: 2px;
        background-color: beige;
    }
    table, th, td {
        border: 2px solid black;
        text-align: center;
        margin: 2px;
        font-family: impact;
    }
</style>

<?php
//DATABASE CONNECTIE MAP
require 'inc/config.php';
//MODEL MAP
require_once 'models/Auto.php';
//CONTROLLER MAP
require_once 'controllers/AutoController.php';


$ctr = new AutoController();
if (isset($_GET['id'])){
    $ctr->showAuto($_GET['id']);

}
else{
    $ctr->index();
    echo "<a href='?voegtoe'>Voeg een nieuwe auto toe aan de lijst</a><br>";
}

?>

<?php
//TOEVOEGEN
if (isset($_GET['voegtoe'])){
    if (isset($_POST['knop'])){
        $ctr->newAuto($_POST['merk'], $_POST['type'], $_POST['kenteken']);
    }
    else{
    ?>

<form method="post" action="">

    <!-- MERK -->
    <p>Merk: <input name="merk" type="text" required></p>
    <!-- TYPE -->
    <p>Type: <input name="type" type="text" required></p>
    <!-- KENTEKEN -->
    <p>Kenteken: <input name="kenteken" type="text" placeholder="AA-111-A" required></p>
    <!-- KNOP -->
    <input type="submit" name="knop" value="Voeg toe"><br>
    <a href="index.php">Toch geen nieuwe auto toevoegen aan de lijst?</a>
</form>


<?php
}
}

//VERWIJDER FUNCTIE
if (isset($_GET['verwijder'])){
    $ctr->deleteAuto($_GET['verwijder']);
}

//AANPAS FUNCTIE
if(isset($_GET['pasaan'])){
    if (isset($_POST['aanpasKnop'])){
        $ctr->updateAuto($_POST['id'], $_POST['merk'], $_POST['type'], $_POST['kenteken']);
    }
    else{
        $ctr->showUpdateForm($_GET['pasaan']);
    }
}
?>

</body>
</html>
