<?php

//FORM GEGEVENS
if (count($autoArray) > 0){
    echo "<table>";
    echo "<tr>";

    //ID
    echo "<th>ID </th>";
    //MERK
    echo "<th>Merk </th>";
    //TYPE
    echo "<th>Type </th>";
    //KENTEKEN
    echo "<th>Kenteken </th>";
    //DETAIL
    echo "<th>Detail </th>";
    //VERWIJDEREN
    echo "<th>ID Verwijder </th>";
    //AANPASSEN
    echo "<th>ID Aanpassen</th>";
    echo "</tr>";


    foreach($autoArray as $auto){
        echo "<tr>";
        //ID
        echo "<td>" . $auto->id . "</td>";
        //MERK
        echo "<td>" . $auto->merk . "</td>";
        //TYPE
        echo "<td>" . $auto->type . "</td>";
        //KENTEKEN
        echo "<td>" . $auto->kenteken . " </td>";
        //LINK ID
        echo "<td><a href='?id={$auto->id}'>Meer informatie over de auto</a></td>";
        //LINK VERWIJDEREN
        echo "<td><a href='?verwijder={$auto->id}'>Verwijder</a></td>";
        //LINK AANPASSEN
        echo "<td><a href='?pasaan={$auto->id}'>Pas aan</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
//ELSE ERROR
else{
    echo "<p>Er zijn nog geen auto's gevonden in de database </p>";
}