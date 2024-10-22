<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$_POST[nombre_usuario]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='./Registro.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(
        nombre_usuario,carrera,no_cuenta,direccion,telefono,email,password)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[carrera]',
            '$_POST[no_cuenta]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='./Registro.php'>Puedes generar un Nuevo registro</a>";
        echo "<a href='./index.php.php'>Ver registros</a>";
}
 

?>