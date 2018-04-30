<?php include HTML_DIR."/overall/header.php";?>
<?php include HTML_DIR."/overall/banner.php";?>
<?php

/*

$c->select Te regresa un arreglo con todos los datos de la consulta
$c->get Te regresa el primer dato de la consulta perfecta para obtener ids o un nombre en especifico
$c->exe Este se usa para ejecutar consultas de insert, update y delete regresando un true o false dependiendo de la consulta


*/

?>
    <div class="download-panel">
       <form id="formLogin">
            <div class="input-group">
                <label for="user">Usuario</label>
                <input type="text" id="user" name="user">  
            </div>
            <div class="input-group">
                <label for="pass">Contraseña</label>
                <input type="password" id="pass" name="pass">
            </div>
        </form>
        <a class="button-download" href="registro" >Registrarse</a>
            <input type="button" value="Entrar" id="buttonLogin">
    </div>
    
<?php include HTML_DIR."/overall/footer.php";?>
