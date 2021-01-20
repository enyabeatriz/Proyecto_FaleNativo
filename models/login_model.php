<?php

require_once "database_model.php";


class LoginModel {

private $users;

function __construct(){

    $this->users = [];


}



private function  getAllUsers(){

   $query = DatabaseModel::database_connect()->query("SELECT * from users");


    while($rows = $query->fetch()){


        $this->users[] = $rows;

    }
   
    return $this->users;

}

public function checkAllFields(){

    if( empty($_POST['name']) || empty($_POST['pass']) ){

        return false;
    } else {

        return true;
    }

    
}

public function  validateUser(){

$users = $this->getAllUsers();
$userExists = false;

foreach( $users as $user){


if($user['username'] == $_POST['name'] && $user['password'] == $_POST['pass'] ){

$userExists = true;


}



}
return $userExists;

}

}

?>