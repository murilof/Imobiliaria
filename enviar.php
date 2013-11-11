<?php
 // Destinatário
  $para = "a11018@bcc.unifal-mg.edu.br";

  // Assunto do e-mail
  $assunto = "Contato Imobiliária";

  // Campos do formulário de contato
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  // Monta o corpo da mensagem com os campos
  $corpo = "Nome: $nome <br>Telefone: $telefone <br>";
  $corpo .= "E-mail: $email <br>Mensagem: $mensagem";

  // Cabeçalho do e-mail
  $header = "From: $nome <$para> Reply-to: $email ";
  $header .= "Content-Type: text/html; charset=iso-8859-1 ";

  mail($para, $assunto, $corpo, $header);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href='index.php'; alert('$msg');</script>";

?>
