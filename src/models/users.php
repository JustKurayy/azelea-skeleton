<?php
namespace Azelea\Core;

class Users {
    private $id;
    private $email;
    private $password;
    private $username;

    public function getId(): int {
        return $this->id;
    }

    public function setEmail($email): static {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword($password): static {
        $this->password = $password;
        return $this;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername($username): static {
        $this->username = $username;
        return $this;
    }
}