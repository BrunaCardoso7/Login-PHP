<?php
class User {
    private $username;
    private $password;
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    public function validateAutentication () {
        return $this->username === "admin" && $this->password === "12345";
    }
}
