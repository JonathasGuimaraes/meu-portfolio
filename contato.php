<?php
if(isset($_POST['email'])) {
  $email_to = "jonathasoliveiraguimaraes48@gmail.com";
  $email_subject = $_POST['subject'];
  
  function died($error) {
    echo "Desculpe, mas houve um problema com o envio do formulário. ";
    echo "Esses erros aparecem abaixo.<br /><br />";
    echo $error."<br /><br />";
    echo "Por favor, volte e corrija esses erros.<br /><br />";
    die();
  }
 
  if(!isset($_POST['name']) ||
      !isset($_POST['email']) ||
      !isset($_POST['projetos']) ||
      !isset($_POST['message'])) {
      died('Desculpe, mas parece haver um problema com os dados enviados.');       
  }
 
  $name = $_POST['name'];
  $email_from = $_POST['email'];
  $projetos = $_POST['projetos'];
  $message = $_POST['message'];
    
  $error_message = "";
 
  if(!filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
      $error_message = 'O email informado não é válido.<br />';
  }
 
  if(strlen($error_message) > 0) {
      died($error_message);
  }
 
  $email_message = "Detalhes do formulário de contato abaixo.\n\n";
  $email_message .= "Nome: ".$name."\n";
  $email_message .= "Email: ".$email_from."\n";
  $email_message .= "Projetos: ".$projetos."\n";
  $email_message .= "Mensagem: ".$message."\n";
    
  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  
  if(mail($email_to, $email_subject, $email_message, $headers)) { ?>
    <html>
      <head>
        <title>Contato</title>
      </head>
      <body>
        <h1>Obrigado pelo seu contato</h1>
        <p>Seu formulário foi enviado com sucesso. Entraremos em contato em breve.</p>
      </body>
    </html>
  <?php 
  } else {
    echo 'Desculpe, mas houve um problema com o envio do formulário. Tente novamente mais tarde.';
  }
  
} else { ?>
  <html>
    <head>
      <title>Contato</title>
    </head>
    <body>
      <h1>Formulário de contato</h1>
      <form method="post" action="contato.php">
        <input type="text" name="name" placeholder="Nome" required  class="box"/><br />
        <input type="email" name="email" placeholder="Email" required class="box" /><br />
        <input type="text" name="projetos" placeholder="Projetos" required  class="box"/><br />
        <textarea name="message" placeholder="Mensagem" required id="" cols="30" rows="10" class="box message"></textarea><br />
        <input type="submit" name="submit" value="Enviar" />
<!--<a href="#enviar"><button class="btn">Enviar<i class="fas fa-paper-plane"></i></button></a>-->
</form>
    </body>
  </html>
<?php } ?>
