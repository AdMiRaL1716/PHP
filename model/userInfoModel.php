<?php

class UserInfo {

    public $FirstName;
    public $Country;
    public $City;
    public $LastName;
    public $Description;
    public $Education;
    public $Work;
    public $Age;

    public function __construct($FirstName, $Country, $City, $LastName, $Description, $Education, $Work, $Age) {
        $this->FirstName = $FirstName;
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