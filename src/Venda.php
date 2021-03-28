<?php
declare(strict_types=1);
class Venda{//exercício básico só pra criar classe, seu construtor, um método e instanciá-la
	private string $data;
	private string $produto;
	private int $quantidade;
	private float $valorTotal;

	public function __construct(string $data, string $produto, int $quantidade, float $valorTotal){
		$this->data = $data;
		$this->produto = $produto;
		$this->quantidade = $quantidade;
		$this->valorTotal = $valorTotal;
	}
	public function getVendaInfo(){
		echo "Sell date: " . $this->data;
		echo "<br>";
		echo "Product: " . $this->produto;
		echo "<br>";
		echo "Amount: " . $this->quantidade;
		echo "<br>";
		echo "Total valor: R$" . $this->valorTotal;
	}
}