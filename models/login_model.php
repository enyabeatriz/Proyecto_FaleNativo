<?php

require_once "database_model.php";


class LoginModel {

private $users;
private $customers;


function __construct(){

    $this->users = [];
    $this->customers = [];



}



private function  getAllUsers(){

   $query = DatabaseModel::database_connect()->query("SELECT * from users");


    while($rows = $query->fetch()){


        $this->users[] = $rows;

    }
   
    return $this->users;

}


private function getCustomerByUsername(){

    $query = DatabaseModel::database_connect()->query("SELECT * FROM customers c INNER JOIN users u on c.user_id = u.id WHERE username='{$_POST['name']}'");
 
 
     while($rows = $query->fetch()){
 
 
         $this->customers[] = $rows;
 
     }
    
     return $this->customers;
 
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


if($user['username'] == strtolower($_POST['name']) && $user['password'] ==sha1($_POST['pass']) ){

$userExists = true;


}



}
return $userExists;

}


public function setUserSession(){

    $customer = $this->getCustomerByUsername();

    session_start();

    $_SESSION['name'] = $customer[0]["name"];
    $_SESSION['lastname'] = $customer[0]["lastname"];
    $_SESSION['phone_number'] = $customer[0]["phone_number"];
    $_SESSION['birthdate'] = $customer[0]["birthdate"];
    $_SESSION['gender'] = $customer[0]["gender"];
    $_SESSION['username'] = $customer[0]["username"];

}
}

?>