<?php

class mg00000001 extends DatabaseManager {
    public function __construct() {
        parent::__construct();
        $this->remove();
        $this->insert();
    }

    public function insert() {
        $this->addSql("CREATE TABLE Persons (PersonID int,LastName varchar(255),FirstName varchar(255),Address varchar(255),City varchar(255))");
        $this->addSql("INSERT INTO Persons (Lastname, FirstName, Address, City) VALUES ('s', 's', 's', 's')");
    }

    public function remove() {
        
    }
}