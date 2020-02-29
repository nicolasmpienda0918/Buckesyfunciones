<?php

echo("clase 4 bucles, arrglos y funciones");


// array indexado
$arreglo=array("Juan","Maria","James","Sandra");
echo("<br>");
print_r($arreglo);
echo("<br>........................................");


//array asociativo
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"Sandra",'usuario4'=>"Camilo");
echo("<br>");
print_r($arreglo);
echo("<br>........................................");




//tamaño de arreglo
$tamamo=count($arreglo);
echo("<br>");
echo("El tamaño de mi arreglo es: ".$tamamo);
echo("<br>........................................");

// bocler fot
for($centinela=0;$centinela<=10;$centinela++){
  echo("<br> El valor de centinela es:".$centinela."<br>");
}


// bucle for para recorrer arrglos
echo("<br>........................................");
$arreglo=array("Juan","Maria","James","Sandra");
for($centinela=0;$centinela<count($arreglo);$centinela++){
    echo("<br>".$arreglo[$centinela]."<br>");
    }


// bucle foreach para recorrer arrglos
echo("<br>........................................");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"Sandra",'usuario4'=>"Camilo");
foreach($arreglo as $clave=>$valor){
    echo"<br>"."La clavees:".$clave;
    echo"<br>".($valor)."<br>";

}

// bucle foreach para recorrer arrglos indexado
echo("<br>........................................");
$arreglo=array("Juan","Maria","James","Sandra");
foreach($arreglo as $clave=>$valor){
echo "<br> El clave del Cajos es: ".($clave);
echo "<br> El valor del Cajos es: ".($valor)."<br>";
}

// arreglos multidireccioneal (arreglo de arreglos)
echo("<br>........................................");
$usuarios=array(
    'usuario1'=>array('Nombre'=>"Juan",'Edad'=>29,'Sexo'=>"Masculino"),
    'usuario2'=>array('Nombre'=>"Maria",'Edad'=>25,'Sexo'=>"Femenino"),
    'usuario3'=>array('Nombre'=>"Nicolas",'Edad'=>29,'Sexo'=>"Masculino"),
    'usuario4'=>array('Nombre'=>"Sandra",'Edad'=>32,'Sexo'=>"Femenino")
    {
foreach($usuarios $clave=> )

}





)


?>