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
      $mensagem = "Email enviado com sucesso! Retornamos em breve.";
  } else{
      $mensagem = "Ops, houve um erro ao enviar seu email!";
  }

  header("location: index.php?&msg=$mensagem");
}?>
<?php include('_mensagem.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Enviando E-mail</title>

    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section>
      <div class="row container">
        <div class="col-xs-offset-2 col-xs-8">
          <form enctype="multipart/form-data" method="POST" action="<?php $PHP_SELF; ?>" class="formcontact">
            <div class="form-group">
              <label for="contato_nome">Nome</label>
              <input type="text" class="form-control" name="contato_nome" id="contato_nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <label for="contato_telefone">Telefone</label>
              <input type="number" class="form-control" name="contato_telefone" id="contato_telefone" placeholder="Telefone">
            </div>
            <div class="form-group">
              <label for="contato_email">Endereço de e-mail</label>
              <input type="email" class="form-control" name="contato_email" id="contato_email" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="contato_mensagem">Mensagem</label>
              <input type="text" class="form-control" name="contato_nome" id="contato_mensagem" placeholder="Deixe aqui sua Mensagem">
            </div>
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
        </div>
      </div>
    </section>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('#Modal').modal('show');
  });
</script>
  </body>
</html>
