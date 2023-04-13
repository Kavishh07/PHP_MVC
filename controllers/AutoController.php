<?php

//CLASS AUTO
class AutoController{
    private $auto;

    //CONSTRUCTOR
    public function __construct(){
        $this->auto = new Auto();
    }

    public function index(){
        $autoArray = $this->auto->showAll();

        include 'views/autoList.php';
    }
    public function showAuto($id){
        if (!is_null($id))
        {
            $this->auto->load($id);
        }
        $auto = $this->auto;
        include 'views/autoDetails.php';
}

//NIEUWEA AUTO FUNCTIE
public function newAuto($merk, $type, $kenteken){
        $result = "";
        if (strlen($merk) > 0 && strlen($type) > 0 && strlen($kenteken) > 0){
            $this->auto->merk = htmlentities($merk);
            $this->auto->type = htmlentities($type);
            $this->auto->kenteken = htmlentities($kenteken);

            if($this->auto->saveNew()){
                $result = $this->auto->merk . " " . $this->auto->type . " is nu toegevoegd";
            }
            else{
                $result = "Een fout is gevonden bij " . $this->auto->merk . " " . $this->auto->type;
            }
        }
        else{
            echo "Niet alle eigenschappen is ingevuld";
        }
        include 'views/newAutoResult.php';
}

//DELETE AUTO FUNCTIE
public function deleteAuto($id){


        if (!is_null($id)){
            $this->auto->load($id);

            if ($this->auto->delete()){
                $result = "Auto met id {$id} is nu verwijderd.";
            }
            else{
                $result = "Fout bij verwijderen van auto met id {$id} ";
            }
        }
        else{
            $result = "Auto met id {$id} is nu niet gevonden.";
        }
        include "views/deleteAutoResult.php";
}

//UPDATE FORM FUNCTIE
public function showUpdateForm($id){
        if (!is_null($id)){
            $this->auto->load($id);

            $auto = $this->auto;

            include "views/updateAutoForm.php";
        }
}

//UPDATE AUTO FUNCTIE
public function updateAuto($id, $merk, $type, $kenteken){
        $result = "";

        if (strlen($id) > 0 && strlen($merk) > 0 &&strlen($type) > 0 &&strlen($kenteken) > 0){
            $this->auto->id = $id;
            $this->auto->merk = $merk;
            $this->auto->type = $type;
            $this->auto->kenteken = $kenteken;
            if ($this->auto->update()){
                $result = $this->auto->merk . " " . $this->auto->type. "is nu aangepast";
            }
            else{
                $result = "Er is een fout bij het aanpassen " . $this->auto->merk . " " . $this->auto->type;
            }
        }
        else{
            $result = "Niet alle eigenschappen zijn nu ingevuld";
        }
        include "views/updateAutoResult.php";
}
}