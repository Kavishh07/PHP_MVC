<?php

//CLASS AUTO
class Auto{
    public $id = null;
    public $merk;
    public $type;
    public $kenteken;


    //FUNCTIE LAAD
    public function load($id){
      
        global $mysqli;
        //QUERY
        $query = "SELECT * FROM auto WHERE id = " . $id;
        //RESULT
        $result = mysqli_query($mysqli, $query);
        //IF ELSE STATEMENT
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            //ID
            $this->id = $id;
            // MERK
            $this->merk = $row['merk'];
            //TYPE
            $this->type = $row['type'];
            //KENTEKEN
            $this->kenteken = $row['kenteken'];
        }
        else{
            throw new Exception("kan auto met het id {$id} nu niet vinden!");
        }
    }

    //FUNCTIE SLA NIEUWE AUTO OP
    public function saveNew(){
        
        global $mysqli;
        if (is_null($this->id)) {
            $this->merk = mysqli_real_escape_string($mysqli, $this->merk);
            $this->type = mysqli_real_escape_string($mysqli, $this->type);

            //QUERY'S
            $query = "INSERT INTO auto (merk, type, kenteken)";
            $query .= "VALUES ('{$this->merk}', '{$this->type}', '{$this->kenteken}')";

            //IF ELSE STATEMENT
            if (mysqli_query($mysqli, $query)) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }


    //FUNCTIE SHOW ALLES
    public function showAll(){
       
        global $mysqli;
        $autos = Array();
        $query = "SELECT id FROM auto ORDER BY id";
        $result = mysqli_query($mysqli, $query);

        //IF ELSE STATEMENT
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                $autoadd = new Auto();
                $autoadd->load($row['id']);
                $autos[] = $autoadd;

            }
        }
        return $autos;
    }


    //FUNCTIE DELETE 
    public function delete(){
        
        global $mysqli;
        if (!is_null($this->id)){
            $query = "DELETE FROM auto WHERE id = " . $this->id;
            if (mysqli_query($mysqli, $query)){
                return true;
            }
        }
        return false;
    }


    //FUNCTIE UPDATE
    public function update(){
       
        global $mysqli;
        if (!is_null($this->id)){
            $this->merk = mysqli_real_escape_string($mysqli, $this->merk);
            $this->type = mysqli_real_escape_string($mysqli, $this->type);
            $this->kenteken = mysqli_real_escape_string($mysqli, $this->kenteken);

            // QUERY
            $query = "UPDATE auto";
            $query .= " SET merk = '{$this->merk}', type = '{$this->type}', kenteken = '{$this->kenteken}'";
            $query .= " WHERE id = {$this->id}";

            //IF ELSE STATEMENT
            if (mysqli_query($mysqli, $query)){
                return true;
            }
            else{
                echo $query. "<br>";
                echo mysqli_error($mysqli);
            }
        }
        else{
            return false;
        }
    }
}


