<?php
use Azelea\Core\Database\DatabaseManager;

class mg00000001 extends DatabaseManager {
    public function insert() {
        $this->addSql("CREATE TABLE Persons2 (PersonID int,LastName varchar(255),FirstName varchar(255),Address varchar(255),City varchar(255))");
        $this->addSql("INSERT INTO Persons2 (Lastname, FirstName, Address, City) VALUES ('s', 's', 's', 's')");
    }

    public function remove() {
        
    }
}
