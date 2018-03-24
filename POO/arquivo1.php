<?php 

class Pessoa{
	public $nome;
	
	public function falar(){
		return "O meu nome é ".$this->nome;
	}
}
$jairo = new Pessoa();
$jairo->nome="Jairo Chaves";
echo $jairo->falar();

?>