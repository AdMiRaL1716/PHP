<?php

class UserRequests {

    public $Friend_One;
    public $Friend_Two;
    public $Status;
    public $ID_User;

    public function __construct($Friend_One, $Friend_Two, $Status, $ID_User) {
        $this->Friend_One = $Friend_One;
        $this->Friend_Two = $Friend_Two;
        $this->Status = $Status;
        $this->ID_User = $ID_User;
    }

}

?>