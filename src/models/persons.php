<?php
/**
 * For testing the DB manager
 */
class Persons {
    private int $id;
    private string $lastname;
    private string $firstname;
    private string $address;
    private string $city;

    public function getId(): int {
        return $this->id;
    }

    public function setLastname($lastname): static {
        $this->lastname = $lastname;
        return $this;
    }

    public function getLastname(): string {
        return $this->lastname;
    }
}