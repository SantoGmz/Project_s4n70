<?php
require "app/recursos/head.php";
?>

<body >


    <!--contenedor-->
    <div class="container">
        <!--col-4-->
        <div id="login" class="row">
            <div class="col-md-4">
            
                <!--Formulario-->
                <form action="" method="POST" autocomplete="off">
                   
                    <h3>Iniciar sesion</h3>
                    <hr color="#007BFF">
                    <input type="text" name="inputUser" autofocus class="saw7" placeholder="Nombre de usuario" required>
                    <input type="password" name="passwd" class="saw7" placeholder="Contraseña" required>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesion</button>
                    <br>
                    <em class="text-danger"><?php
                        if(isset($mensajesError['usuario_incorrecto'])){
                        echo $mensajesError['usuario_incorrecto'];
                        }
                        ?>
                    </em>
                    <br>
                   <!-- <span class="otherPregunte">Aun no te has registrado? <a href="registro.php" class="otherPregunte">Registrarme</a></span> -->
                </form>
                
            </div>
        </div>
    </div> 




<!-- librerias-->

<!-- /librerias -->
</body>

</html>