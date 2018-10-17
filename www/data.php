<?php
// Script de funções operacional
	
date_default_timezone_set('America/Fortaleza');
 

function f_datahora()
{
    echo json_encode( array ('DataHora' => date('d-m-Y H:i')) ); 	
    return true;
}

function f_bancoopen($whost,$wuser,$wpassword,$wdata)
{
	return mysqli_connect($whost,$wuser,$wpassword,$wdata);
}
function f_bancocharset($wcon,$wcharset)
{
	return mysqli_set_charset($wcon,$wcharset);
}
function f_bancoquery($wcon,$wsql)
{
    $myfile = fopen('sqlcomand.txt', 'w') or die('Unable to open file!');
	fwrite($myfile, $wsql);
	fclose($myfile);	
    return mysqli_query($wcon,$wsql); 
}
function f_bancoqueryrows($wcon)
{
	return mysqli_affected_rows($wcon);
}
/* Seletor de Funções */






function f_despesas() 
{
echo "estou aqui";
//	echo file_get_contents("http://api.tcm.ce.gov.br/sim/1_0/municipios.json");
	
}


	

if ( isset($_POST['action']) && !empty($_POST['action']) )
{
	$waction = $_POST['action'];
	$wresult = $waction();
	exit;
}





