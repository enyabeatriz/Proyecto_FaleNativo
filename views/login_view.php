

<form action="controllers/login_controller.php" method="POST">
    <label for="">Usuario</label>
   <input type="text" name="name">
   <label for="">Contraseña</label>
   <input type="password" name="pass"> 
   <button>Ingresar</button>
    </form>
    <?php

if(isset($_GET['r'])){
   if($_GET['r'] == 'fields' ){
 
      echo "<div>
      
      <p style='color:red'>Por favor complete todos los campos</p>
      
      </div>";
      
      } else if ($_GET['r'] == 'ok' ) {
     
         echo "<div>
      
      <p style='color:green'>Bienvenido {$_GET['u']} </p>
      
      </div>";
         
      }else{
     
             echo "<div>
      
             <p style='color:red'>Usuario no valido </p>
             
             </div>"; 
          
     
      }
        

}
 ?>
 