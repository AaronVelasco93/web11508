<?php
    include "conexion.php";

    $consulta_sql = "SELECT * FROM alumno";
    $resultado =$conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);
   
    echo "
            <table>
                <tr>
                    <th>Alumnos</th>
                    <th>Fecha registro</th>
                    
                </tr>
    ";

    if( $count>0){
        while( $row=mysqli_fetch_assoc($resultado) ){
            echo "<tr>";
                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
            echo "</tr>";
        }
        
    }
?>