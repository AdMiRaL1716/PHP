<?php

class model_admin {

    public function user_authentication() {
        if (isset($_SESSION['ID_User'])) {
            $test = true;
        } else {
            $test = false;
            if (isset($_POST['send'])) {
                $login = filter_input(INPUT_POST, 'login');
                $password = filter_input(INPUT_POST, 'password');
                $sql = 'SELECT * FROM `users` WHERE `Login`="'.$login.'"';
                $db = new db();
                $item = $db->getOne($sql);
                if ($item != null) {
                    if ($login == $item['Login'] && password_verify($password, $item['Password'])) {
                        $test = true;
                        $_SESSION['ID_User'] = $item['ID_User'];
                        $_SESSION['name'] = $item['Login'];
                        $_SESSION['session_id'] = session_id();
                    }
                }
            }
        }

        return $test;
    }

    public function user_One() {
        $session = $_SESSION['ID_User'];
        $sql = "SELECT * FROM `users` WHERE `ID_User`=".$session;
        $db = new db();
        $rows = $db->getAll($sql);
        $user = array();
        foreach ($rows as $item) {
            $row = new Users($item['ID_User'], $item['FirstName'], $item['Login'], $item['Email'], $item['Password'], $item['Image'], $item['Country'], $item['City'], $item['LastName'], $item['Description'], $item['Education'], $item['Work'], $item['Age']);
            $user[] = $row;
        }
        return $user;
    }

}

?>