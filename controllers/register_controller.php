<?php
include "../models/register_model.php";


$registerModel = new RegisterModel;


$checkUser = $registerModel->checkUser();
$checkAllFields =$registerModel-> checkAllFields();
$registerUser =$registerModel->registerUser();

if($checkAllFields == true){

    header("Location:../views/register_view.php?v=empty"); 


} else {
    
if(count($checkUser) > 0){


    echo "existe el usuario";
    header("Location:../views/register_view.php?v=exist"); 


} else {

    if($registerUser > 0){

     echo"se registro correctamente";
     header("Location:../views/register_view.php?v=ok"); 
    } else {

       echo"error al crear el usuario, intente mas tarde";
       header("Location:../views/register_view.php?v=noOk"); 
    }


}



}





?>