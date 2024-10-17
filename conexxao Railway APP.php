<?php
$link = mysql_connect(mysql://root:LIDgXAOsTiNUZigbGwLsoKELTJkqdebI@autorack.proxy.rlwy.net:25438/railway);
if (!$link) {
	die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso';
mysql_close($link);
?>
