<?php

class modelFaqAction {

    public function imageAdd($id) {

        $test = false;

        if (isset($_POST['send'])) {

            $Image = $_FILES['Image']['name'];
            if ($Image != "") {
                $uploaddir = '../public/userImages/';
                $uploadfile = $uploaddir . basename($_FILES['Image']['name']);
                copy($_FILES['Image']['tmp_name'], $uploadfile);
            }
            $errorString = "";
            $sqlUser = "SELECT `Image` FROM `users` WHERE `users`.`ID_User` = $id;";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            $resultUser = new UserOneConfirm($userOne['Image']);
            if ($userOne['Image'] == $Image) {
                $errorString.="Пожалуйста измените фото<br>";
            }


            if (mb_strlen($errorString) == 0) {
                $sql = "UPDATE `users` SET `Image` = '$Image' WHERE `users`.`ID_User` = $id;";
                if($userOne['Image']!="" && $userOne['Image']!="image.png"){
                    unlink("../public/userImages/".$userOne['Image']);
                }
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы изменили фото");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }

    public function loginEdit($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $Login = $_POST['Login'];

            $sqlUser = "SELECT `Login` FROM `users` WHERE `users`.`ID_User` = $id;";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            $resultUser = new UserOneConfirm($userOne['Login']);
            if ($userOne['Login'] == $Login) {
                $errorString.="Пожалуйста используйте другое имя пользователя, она занято, либо Вы ничего не изменили<br>";
            }
            if (strlen($Login) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }

            if (mb_strlen($errorString) == 0) {
                $sql = "UPDATE `users` SET `Login` = '$Login' WHERE `users`.`ID_User` = $id;";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы изменили логин");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }
    
    
    public function userOne($id) {
        $sql = "SELECT `ID_User`, `FirstName`, `Image`, `Country`, `City`, `LastName`, `Description`, `Education`, `Work`, `Age` FROM `users` WHERE `ID_User`=" . $id;
        $db = new db();
        $item = $db->getOne($sql);

        $user_object = new UserResult($item['ID_User'], $item['FirstName'], $item['Image'], $item['Country'], $item['City'], $item['LastName'], $item['Description'], $item['Education'], $item['Work'], $item['Age']);

        return $user_object;
    }
    
    
    
    public function getSearch($text) {
        $sql = "SELECT `ID_User`, `FirstName`, `LastName`, `Image` FROM `users` WHERE `Login` LIKE '%" . $text . "%'";
        $sql2 = "SELECT `ID_User`, `FirstName`, `LastName`, `Image` FROM `users` WHERE `FirstName` LIKE '%" . $text . "%'";
        $sql3 = "SELECT `ID_User`, `FirstName`, `LastName`, `Image` FROM `users` WHERE `LastName` LIKE '%" . $text . "%'";
        $text = addslashes($text);
        $sql4 = "SELECT `ID_User`, `FirstName`, `LastName`, `Image` FROM `users` WHERE (
                  users.FirstName LIKE CONCAT('%',SUBSTRING_INDEX('" . $text . "', ' ', 1),'%')
                  AND users.LastName LIKE CONCAT('%',SUBSTRING_INDEX('" . $text . "', ' ', - 1),'%')
                ) 
                OR (
                  users.FirstName LIKE CONCAT('%',SUBSTRING_INDEX('" . $text . "', ' ', - 1),'%')
                  AND users.LastName LIKE CONCAT('%',SUBSTRING_INDEX('" . $text . "', ' ', 1),'%')
                )
                ";
        $db = new db();
        $rows = $db->getAll($sql);
        $rows += $db->getAll($sql2);
        $rows += $db->getAll($sql3);
        $rows += $db->getAll($sql4);
        return $rows;
    }
    
    
    

    public function userInfoEdit($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Country = $_POST['Country'];
            $City = $_POST['City'];
            $Age = $_POST['Age'];
            $Education = $_POST['Education'];
            $Work = $_POST['Work'];
            $Description = $_POST['Description'];

            $editUser = new UserInfo($FirstName, $Country, $City, $LastName, $Description, $Education, $Work, $Age);

            $sqlUser = "SELECT `FirstName`, `LastName`, `Country`, `City`, `Age`, `Education`, `Work`, `Description` FROM `users` WHERE `users`.`ID_User` = $id;";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            $resultUser = new UserInfo($userOne['FirstName'], $userOne['Country'], $userOne['City'], $userOne['LastName'], $userOne['Description'], $userOne['Education'], $userOne['Work'], $userOne['Age']);
            if ($editUser == $resultUser) {
                $errorString.="Пожалуйста измените что-то<br>";
            }
            //--------------------------------------------------
            if (strlen($FirstName) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($LastName) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($Country) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($City) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($Education) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($Work) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($Description) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            if (strlen($Age) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }
            //--------------------------------------------------


            if (mb_strlen($errorString) == 0) {
                $sql = "UPDATE `users` SET `FirstName` = '$FirstName', `LastName` = '$LastName', `Country` = '$Country', `City` = '$City', `Age` = '$Age', `Education` = '$Education', `Work` = '$Work', `Description` = '$Description' WHERE `users`.`ID_User` = $id;";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы изменили данные");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }

    public function emailEdit($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $Email = $_POST['Email'];

            $sqlUser = "SELECT `Email` FROM `users` WHERE `users`.`ID_User` = $id;";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            $resultUser = new UserEmail($userOne['Email']);
            if ($userOne['Email'] == $Email) {
                $errorString.="Пожалуйста измените email<br>";
            }
            if (strlen($Email) > 100) {
                $errorString.="Вы ввели слишком много символов<br>";
            }


            if (mb_strlen($errorString) == 0) {
                $sql = "UPDATE `users` SET `Email` = '$Email' WHERE `users`.`ID_User` = $id;";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы изменили email");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }
    
    
    public function addFriend($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $TwoID = $_POST['AddUser'];
            
            if ($TwoID == "") {
                $errorString.="Произошла ошибка<br>";
            }
            $session1 = $_SESSION['ID_User'];
            $sqlUser = "SELECT `Friend_One`,`Friend_Two`,`Status`,`ID_User` FROM `friends` WHERE (Friend_One=$session1 OR Friend_Two=$session1) AND (Friend_One=$TwoID OR Friend_Two=$TwoID)";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            
            if ($userOne != "") {
                $errorString.="Вы уже отправили запрос<br>";
            }

            if (mb_strlen($errorString) == 0) {
                $session = $_SESSION['ID_User'];
                $sql = "INSERT INTO `friends` (Friend_One, Friend_Two, ID_User) VALUES ($session, $TwoID, $session)";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы отправили запрос");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }
    
    public function getRequests() {
        $session1 = $_SESSION['ID_User'];
        $sql = "SELECT friends.*, users.FirstName as 'FName', users.LastName as 'LName', users.Image as 'UserImage' FROM `friends`, `users` WHERE Friend_Two = $session1 AND Status = '0' AND friends.ID_User= users.ID_User ORDER BY friends.ID_User";
        $db = new db();
        $rows = $db->getAll($sql);			
        return $rows;
    }
    
    public function confirmFriend($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $TwoID = $_POST['AddUser'];
            
            if ($TwoID == "") {
                $errorString.="Произошла ошибка<br>";
            }
            
            $session1 = $_SESSION['ID_User'];
            $sqlUser = "SELECT `Friend_One`,`Friend_Two`,`Status`,`ID_User` FROM `friends` WHERE (Friend_One=$session1 OR Friend_Two=$session1) AND (Friend_One=$TwoID OR Friend_Two=$TwoID) AND `Status`= '1'";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            
            if ($userOne != "") {
                $errorString.="Вы уже дружите<br>";
            }

            if (mb_strlen($errorString) == 0) {
                $session = $_SESSION['ID_User'];
                $sql = "UPDATE `friends` SET `Status`= '1' WHERE `Friend_One` = $TwoID AND `Friend_Two` = $session";
                $db = new db();
                $item = $db->executeRun($sql);
                $test = array(0 => true, 0 => "Вы приняли запрос");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }
    
    public function noConfirmFriend($id) {

        $test = false;

        if (isset($_POST['send'])) {
            $errorString = "";
            $TwoID = $_POST['AddUser'];
            
            if ($TwoID == "") {
                $errorString.="Произошла ошибка<br>";
            }
            
            $session1 = $_SESSION['ID_User'];
            $sqlUser = "SELECT `Friend_One`,`Friend_Two`,`Status`,`ID_User` FROM `friends` WHERE (Friend_One=$session1 OR Friend_Two=$session1) AND (Friend_One=$TwoID OR Friend_Two=$TwoID) AND `Status`= '2'";
            $db2 = new db();
            $userOne = $db2->getOne($sqlUser);
            
            if ($userOne != "") {
                $errorString.="Вы уже отклонили заявку<br>";
            }
            
            $sql2User = "SELECT `Friend_One`,`Friend_Two`,`Status`,`ID_User` FROM `friends` WHERE (Friend_One=$session1 OR Friend_Two=$session1) AND (Friend_One=$TwoID OR Friend_Two=$TwoID)";
            $db3 = new db();
            $userOne2 = $db3->getOne($sql2User);
            
            if ($userOne2 == "") {
                $errorString.="Вы уже отклонили заявку<br>";
            }

            if (mb_strlen($errorString) == 0) {
                $session = $_SESSION['ID_User'];
                $sql = "UPDATE `friends` SET `Status`= '2' WHERE `Friend_One` = $TwoID AND `Friend_Two` = $session";
                $sql2 = "DELETE FROM `friends` WHERE (Friend_One=$session OR Friend_Two=$session) AND (Friend_One=$TwoID OR Friend_Two=$TwoID) AND `Status` = '2'";
                $db = new db();
                $item = $db->executeRun($sql);
                $item += $db->executeRun($sql2);
                $test = array(0 => true, 0 => "Вы отклонили запрос");
            } else {
                $test = array(0 => false, 1 => $errorString);
            }
        }

        return $test;
    }
    
    public function getFriends() {
        $session1 = $_SESSION['ID_User'];
        $sql = "SELECT friends.*, users.FirstName as 'FName', users.LastName as 'LName', users.Image as 'UserImage' FROM `friends`, `users` WHERE Friend_Two = $session1 AND Status = '1' AND friends.ID_User= users.ID_User ORDER BY friends.ID_User";
        $db = new db();
        $rows = $db->getAll($sql);			
        return $rows;
    }

}
