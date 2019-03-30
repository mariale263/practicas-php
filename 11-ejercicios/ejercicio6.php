<?php

/**
 * EJERCICIO 6
 * Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
 */

 /*
 echo "<table border='1'>"; //inicio de tabla
 
 echo "<tr>"; //inicio de fila 1 de celdas
    for ($cabecera=1; $cabecera <= 10; $cabecera++) { 
        echo "<td>Tabla del $cabecera</td>";
    }

 echo "</tr>"; //cierre de fila 1 de celdas
 
 echo "<tr>"; //inicio de fila 2 de celdas
    for ($i=1; $i <= 10; $i++) { 
        echo "<td>";
            for ($x=0; $x <=10 ; $x++) { 
                echo "$i x $x = ".($i*$x)."<br>";
            }
        echo "</td>";
    }

 echo "</tr>"; //cierre de fila 2 de celdas

 echo "</table>";//fin de tabla

 */
?>

 <table border='1'>
    <tr>
        
            <?php
                for ($cabecera=1; $cabecera <= 10; $cabecera++): 
            ?>
                    <td>Tabla del <?=$cabecera?></td>
            <?php 
                endfor; 
            ?>
        
    </tr>
    <tr>
        
            <?php
                for ($i=1; $i <= 10; $i++) : 
            ?>
                <td>
            <?php
                    for ($x=0; $x <=10 ; $x++) : 
                
                        echo "$i x $x = ".($i*$x)."<br>";
            ?>
                
                <?php 
                    endfor;
                ?>
                </td>
            <?php
                endfor;
            ?>
        
    </tr>
 </table>