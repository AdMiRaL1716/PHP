<?php

class model {

    public function getUserList() {
        $sql = "SELECT * FROM `users`";
        $db = new db();
        $rows = $db->getAll($sql);

        $user = array();
        foreach ($rows as $item) {
            $row = new Users($item['ID_User'], $item['FirstName'], $item['Login'], $item['Email'], $item['Password'], $item['Image'], $item['Country'], $item['City'], $item['LastName'], $item['Description'], $item['Education'], $item['Work'], $item['Age']);
            $user[] = $row;
        }
        return $user;
    }

    public function getUserOne($id) {
        $sql = "SELECT * FROM `users` WHERE `ID_User`=" . $id;
        $db = new db();
        $item = $db->getOne($sql);

        $user_object = new Users($item['ID_User'], $item['FirstName'], $item['Login'], $item['Email'], $item['Password'], $item['Image'], $item['Country'], $item['City'], $item['LastName'], $item['Description'], $item['Education'], $item['Work'], $item['Age']);

        return $user_object;
    }

    public function user_register() {
        $test = array(0 => false); 
        if (isset($_POST['send'])) {
            $errorString = "";
            $loginUs = filter_input(INPUT_POST, 'loginUs');
            $firstName = filter_input(INPUT_POST, 'firstName');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $confirm = filter_input(INPUT_POST, 'confirm');

            if (!$email) {
                $errorString.="Емайл не корректный<br>";
            }
            if (!$password || !$confirm || mb_strlen(trim($password)) < 6) {
                $errorString.="Пороль должен быть больше, чем 6 символов<br>";
            }
            if ($password != $confirm) {
                $errorString.="Пароли не совпадают<br>";
            }


            $sqlUser = "SELECT `Login` FROM `users` WHERE `Login`= '" . $loginUs . "'";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            $resultUser = new UserOneConfirm($userOne['Login']);
            if ($userOne['Login'] == $loginUs) {
                $errorString.="Такой пользователь уже есть, пожалуйста придумайте другой логин<br>";
            }

            if (mb_strlen($errorString) == 0) {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`ID_User`, `Login`, `FirstName`, `Email`, `Password`) VALUES (NULL, '$loginUs', '$firstName', '$email', '$passwordHash')";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 1 => "Пользователь добавлен");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }
        return $test;
    }

}

?>