<?php
$n1=20;
$n2=16;

// diferentes if
if ($n1>$n2) {
    echo $n1." es mayor<br>";   
}else {
    echo $n2." es mayor<br>";
}

if ($n1<$n2) {
    echo $n2." es mayor<br>";
}else {
    echo $n1." es mayor<br>"; 
}

if ($n1>=$n2) {
    echo $n2." es mayor o igual<br>";
}else {
    echo $n1." es menor o igual<br>"; 
}

if ($n1!=$n2) {
    echo $n2." son diferentes<br>";
}

//Estructura de control For
for ($i=0; $i < 10; $i++) {
    echo $i."<br>";
}


// Estructura switch
$n1 = 5;
switch ($n1) {
    case 1:{
        echo "caso uno";
        break;
    }
    case 2:{
        echo "caso dos";
        break;
    }
    case 3:{
        echo "caso tres";
        break;
    }
    default:{
        echo "predeterminado<br>";
    }
}

$arreglo = array(1,2,3,4);

echo $arreglo[3];

echo "<ul>";
foreach ($arreglo as $r) {
    echo "<li>".$r."</li>";
}

echo "</ul>"

 
echo "<ul id ='lista'>";
foreach ($arreglo as $index => $valor) {
    echo "<li>array[$index]".$valor."</li>";
}

 echo "</ul>";
$arreglo = array("nombre"=>"juan", "Apellido"=>"Lopez","Edad"=>"19");
 echo "<ul id ='lista3'>";
foreach ($arreglo as $index => $valor) {
    echo "<li>array[$index]".$valor."</li>";
}

 echo "</ul>";
?>
