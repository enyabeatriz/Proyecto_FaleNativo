<?php

require_once "../models/login_model.php";

$loginModel = new LoginModel;
$validateFields = $loginModel->checkAllFields();

if($validateFields == true){

    if($loginModel->validateUser() == true){

        $loginModel->setUserSession();

         header("Location:../index.php?r=ok&u={$_POST['name']}"); 

} else {
    header("Location:../index.php?r=error"); 

}
} else {
    header("Location:../index.php?r=fields"); 
    
}


//si existe el usuario, mostrar en la pantalla del login Bienvenido y el nombre del usuario
//si no existe mostrar en la pantalla del login, un mensaje usuario o contrasena incorrectos
//si no completa alguno de los 2 campos, mostrar en la pantalla del login un mensaje diciendo complete ambos campos
?>