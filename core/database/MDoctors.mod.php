<?php

class MDoctors{
    private $conn;
    private $primary_key;
    private $value;

    public function __construct($_primary_key = null){
        $this->conn = new PDO(DATABASE,LOGIN,PASSWORD);
        $this->primary_key = $_primary_key;
    }

    public function __destruct(){
    }

    public function SetValue($_value){
        $this->value = $_value;
    }

    public function SelectAll(){
        $query = '
        select D.ID_DOCTOR, D.LASTNAME, D.FIRSTNAME, D.TYPEDOCTOR, D.PHONENUMBER, D.MAIL, D.PORTRAIT
        from DOCTORS D
        ';
        $result = $this->conn->prepare($query);
        $result->execute() or die ($this->ErrorSQL($result));

        return $result->fetchAll();

    }

    public function SelectSpecialities($_doctor){
        $query = '
        SELECT S.SPECIALITY FROM SPECIALITIES S, DOCTORS_SPECIALITIES DS, DOCTORS D
        WHERE S.ID_SPECIALITY = DS.ID_SPECIALITY
        AND DS.ID_DOCTOR = D.ID_DOCTOR
        AND D.LASTNAME = "'.$_doctor.'"
        ';

        $result = $this->conn->prepare($query);
        $result->execute() or die ($this->ErrorSQL($result));

        return $result->fetchAll();
    }
}