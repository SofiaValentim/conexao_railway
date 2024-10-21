<php 
$link = mysql_connect('mysql://root:YmnpbPPlHNgBiZDJENtaVYkcGGPbpqwu@autorack.proxy.rlwy.net:47687/railway');
if(!$link) {
die('Não pode ser conectado:', mysql_error());
 
}
echo 'Conexão ';
mysql_close($link);
?>