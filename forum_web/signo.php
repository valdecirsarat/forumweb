<?php 

$date = filter_input(INPUT_POST, "dataNasc");

$date = explode('-',$date);
$date = strtotime($date[2].'-'.$date[1].'-0000');

$xml = simplexml_load_file("sig.xml");

   // Percorre todos os registros de vendas
foreach($xml->signo as $registro)
{
	if ($date >= strtotime($registro->dataInicio) && $date <= strtotime($registro->dataFim))
	{
		echo 'Data Inicio: ' . date('d/m',strtotime($registro->dataInicio)) . '<br>';
    echo 'Data Final: ' . date('d/m',strtotime($registro->dataFim)) . '<br>';
	echo 'Signo: ' . $registro->signoNome . '<br>';
	echo 'Descrição: ' . $registro->descricao . '<br>';
	}
}

	echo '<hr>';