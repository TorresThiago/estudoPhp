<?PHP

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;

?>