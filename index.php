<html><!--exercício básico só pra criar classe, seu construtor, um método e instanciá-la !-->
<head>
    <meta charset="utf-8">
    <title>Sell Simulator</title>
    <meta name="author" content="@nicholaslagoa">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
	<H3>SELL SIMULATOR</H3>
	<hr></hr>
	<p>
	<?php
		require "src/Venda.php";
		$sell = new Venda('15-02-2006', 'Playstation 2', 1, 750.00);
		$sell->getVendaInfo();
	?>
</body>
</html>