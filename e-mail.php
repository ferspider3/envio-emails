<?php if($_SERVER['REQUEST_METHOD'] == "POST") {

  //Configurações do email, ajustar conforme necessidade
  $email_destinatario = "DEV-SPIDER <contato@dev-spider.com.br>";
  $email_reply = "".$_POST['contato_nome']." <".$_POST['contato_email'].">";
  $email_assunto = "Nova mensagem de ".$_POST['contato_nome']."";

  //Monta o Corpo da Mensagem
  $email_conteudo =  "
  <strong>Nome:</strong> ".$_POST['contato_nome']."<br>
  <strong>Telefone:</strong> ".$_POST['contato_telefone']."<br>
  <strong>E-mail:</strong> ".$_POST['contato_email']."<br>
  <br>
  <strong>Mensagem:</strong> ".$_POST['contato_mensagem']."
  <br>
  <br>
  Mensagem enviada atraves do site DEV-SPIDER";

  //Seta os Headers (Alerar somente caso necessario)
  $email_headers = implode ( "\n",array ( "From: $email_destinatario", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_reply","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

  //Enviando o email
  if (mail ($email_destinatario, $email_assunto, $email_conteudo, $email_headers)){
      echo '<div class="alert alert-success"><i class="icon-check"></i>Email enviado com sucesso! Retornamos em breve.</div>';
  } else{
      echo '<div class="alert alert-error"><i class="icon-check"></i>Ops, houve um erro ao enviar seu email!</div>';

  }

}?>
