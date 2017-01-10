<?php 

$automovil1 = (object)["marca"=>"toyota", "modelo"=>"corolla"];
$automovil2 = (object)["marca"=>"mazda", "modelo"=>"2"];

function mostrar($automovil){
	echo "<p>Este es un carro marca $automovil->marca modelo $automovil->modelo</p>";
}

mostrar($automovil1);
mostrar($automovil2);

?>