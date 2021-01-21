<?php
require_once "database_model.php";

class RegisterModel{

    function __construct(){

        $this->users = [];
        $this->userId = "";
    
    
    }

    public function checkUser(){
    
       $query = DatabaseModel::database_connect()->query("SELECT * from users WHERE username='{$_POST['user']}'");
    
    
        while($rows = $query->fetch()){
    
    
            $this->users[] = $rows;
    
        }
       
        return $this->users;
    
    }


    public function checkAllFields (){
    

    if($_POST['fname'] == ''  || $_POST['lname'] == '' || $_POST['date'] == '' 
    
    || $_POST['user'] == '' 
    
    || $_POST['pass'] == ''   ){

return true;
}
else { 
     return false;
}

    }


    public function registerUser(){
        $passwordHashed = sha1($_POST['pass']);
        $userLowerCase =strtolower($_POST['user']) ;
        $count = DatabaseModel::database_connect()->exec("INSERT INTO users VALUES (NULL,'{$userLowerCase}','{$passwordHashed}')");    
        $query = DatabaseModel::database_connect()->query("SELECT id from users WHERE username='{$_POST['user']}'");
    
   
       while($rows = $query->fetch()){
    
    
            $this->userId = $rows;
    
        }

        
        if($count == 1){

            $count = DatabaseModel::database_connect()->exec("INSERT INTO customers VALUES (NULL,'{$_POST['fname']}','{$_POST['lname']}','{$_POST['tel']}','{$_POST['date']}','{$this->userId['id']}','{$_POST['gender']}')");
            
            return $count;
}
         else {


            return $count;
    
        }

    }

}

?>

  