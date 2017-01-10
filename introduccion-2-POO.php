<?php 

class Frutas{
	public function pintar(){
		echo "<p>me gusta la $this->fruta, y tambien las $this->fruta2</p>";
	}
}

$a = new Frutas();
$a -> fruta="manzana";
$a -> fruta2="uvas";
$a -> pintar();

$b = new Frutas();
$b -> fruta="papaya";
$b -> fruta2="tunas";
$b -> pintar();
?>