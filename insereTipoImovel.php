<?php

require_once './tipoImovel.php';

$tipo = new TipoImovel();

$tipo->setNome($_POST['nome']);
$tipo->cadastroTipo();

$msg = "Tipo de imovel cadastrado com sucesso.";

// Mostra a mensagem acima e redireciona para index.html
echo "<script>location.href='index.php'; alert('$msg');</script>";
?>
