

<h1>Registrarte</h1>
<form action='../controllers/register_controller.php' method='POST'>

  <label for="fname">Nombre</label><br>
  <input type="text" name="fname"><br>

  <label for="lname">Apellido</label><br>
  <input type="text" name="lname"><br>

  <label for="lname">Telefono</label><br>
  <input type="tel"  name="tel"><br>

  <label for="lname">Fecha de nacimiento</label><br>
  <input type="date" name="date"><br>

  <label for="lname">Usuario</label><br>
  <input type="text" name="user"><br>

  <label for="lname">Contraseña</label><br>
  <input type="password" name="pass"><br>
  <br>
  <button type="submit"> Registrarme </button><br>
</form>

<?php

if (isset($_GET['v'])){

if($_GET['v']=='exist'){
    echo "<div>
      
    <p style='color:red'>El usuario ingresado ya existe! </p>
    
    </div>";
} elseif($_GET['v'] =='empty'){

    echo "<div>
      
    <p style='color:red'>Complete todos los campos! </p>
    
    </div>";

} elseif($_GET['v'] == 'ok'){


    echo "<div>
      
    <p style='color:green'>Se registro correctamente! </p>
    
    </div>";


}else {



    echo "<div>
      
    <p style='color:red'> error al crear el usuario, intente mas tarde    </p>
    
    </div>";
}

}




?>