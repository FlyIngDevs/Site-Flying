<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $phone = $_POST['phone'];
  
  // Corpo do E-mail
  $corpo_email = "
    <html>
      <p><b>Nome:</b> $nome</p>
      <p><b>E-mail:</b> $email</p>
      <p><b>Telefone:</b> $phone</p>
      <p><b>Mensagem:</b> $mensagem</p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contatoflyingmm@gmail.com";
  $assunto = "Contato pelo Site";
  
  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";
  
  //Enviar
  mail($destino, $assunto, $corpo_email, $headers);
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>