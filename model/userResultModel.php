<?php

class UserResult {

    public $ID_User;
    public $FirstName;
    public $Image;
    public $Country;
    public $City;
    public $LastName;
    public $Description;
    public $Education;
    public $Work;
    public $Age;

    public function __construct($ID_User, $FirstName, $Image, $Country, $City, $LastName, $Description, $Education, $Work, $Age) {
        $this->ID_User = $ID_User;
        $this->FirstName = $FirstName;
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