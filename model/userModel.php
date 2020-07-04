<?php

class Users {

    public $ID_User;
    public $FirstName;
    public $Login;
    public $Email;
    public $Password;
    public $Image;
    public $Country;
    public $City;
    public $LastName;
    public $Description;
    public $Education;
    public $Work;
    public $Age;

    public function __construct($ID_User, $FirstName, $Login, $Email, $Password, $Image, $Country, $City, $LastName, $Description, $Education, $Work, $Age) {
        $this->ID_User = $ID_User;
        $this->FirstName = $FirstName;
        $this->Login = $Login;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->Image = $Image;
        $this->Country = $Country;
        $this->City = $City;
        $this->LastName = $LastName;
        $this->Description = $Description;
        $this->Education = $Education;
        $this->Work = $Work;
        $this->Age = $Age;
    }

}

?>