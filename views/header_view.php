<header>

<nav>
<a href="views/register_view.php">Registrar </a>


<?php

if(count($_SESSION) > 0){

    echo "<a href='index.php?s=true'>Salir</a>";
    
    }

if(isset($_GET['s'])){

    if($_GET['s'] == 'true'){

        if(!empty($_SESSION)){

            session_destroy();

            header("location:index.php");
   
        }
 }

}
?>
</nav>
</header>