<?php
//Obtiene los datos de los campos del login  
$Correo_Electronico=$_POST['Correo_Electronico'];
$Contraseña=$_POST['Contraseña'];
//Desemcripta la contraseña que se recupera de la base de datos
$Contraseña = hash('sha512', $Contraseña);

//Hacemos una conexion a la base de datos en la cual se espesifica que sera de manera local, un usuario
//una contraseña ( en este caso no tiene la base de datos) y el nombre de la base de datos
$conexion=mysqli_connect("localhost:3306","root","","sistema");

//Hacemos una consulta a nuestra base de datos en la que seleccionara los campos y el contenido de este y lo 
//comparara con los datos dados por el usuario 
$consulta="SELECT * FROM usuarios where Correo_Electronico='$Correo_Electronico' and Contraseña='$Contraseña'";
//Variable en donde se almacena el resultado de la consulta(sql, query) y la coneccion a la base de datos
$resultado=mysqli_query($conexion,$consulta);
//Esta variable regresa los resultados de la variable "resultados" 
$filas=mysqli_num_rows($resultado);

//si "filas tiene los resultados de la consulta y estos concuerdan con el correo electronico y la contraseña 
//de la base de datos, entonces mandara al usuario al archivo home
if($filas){ 
    header("location: home.html");

}else{
    ?>
    <?php
    include("login.html"); 
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
//Cierra la coneccion con la base de datos
mysqli_close($conexion);

?>