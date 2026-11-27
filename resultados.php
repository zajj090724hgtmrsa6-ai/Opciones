<?php
    echo "<h2>Opciones elegidas:</h2><br>";
    $DT = $_POST['D_Turisticos'] ?? []; 
    $CT = 0;
    $CA = 0;
    $CS = 0;
    foreach($DT as $T){
        $CT++;
        echo $T . "<br>";
    }
    echo "<h2>Actividades turisticas:</h2><br>";
    $AT = $_POST['A_Turisticas'] ?? []; 
    foreach($AT as $A){
        $CA++;
        echo $A . "<br>";
    }
    echo "<h2>Servicios adicionales:</h2><br>";
    $SA = $_POST['S_Adicionales'] ?? []; 
    foreach($SA as $S){
        $CS++;
        echo $S . "<br>";
    }
    echo "<h2>Datos del cliente</h2><br>";
    $N = $_POST['Nombre'];
    $E = $_POST['Email'];
    echo "Nombre: ". $N. "<br>";
    echo "Correo: ". $E. "<br>";
    $CTotal = $CT + $CA + $CS;
    echo "<h2>Categorias</h2>";
    echo "Cantidad de destinos turisticos: ". $CT. "<br>";
    echo "Cantidad de actividades turisticas: ". $CA. "<br>";
    echo "Cantidad de Servicios adicionales: ". $CS. "<br>";
    echo "Cantidad de categorias elegidas: ". $CTotal. "<br>";


?>