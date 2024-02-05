<?php

  class DataProvider{

    public function connect(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=familytree_db','root','');
            echo 'connection succesffull';
            return $db;

        }catch(Exception $e){
            echo 'There is a problem connecting to db: <br/>';
            echo $e->getMessage();
        }
    }

    public function addPerson($name,$day_of_birth,$place_of_birth){

    }
    
}