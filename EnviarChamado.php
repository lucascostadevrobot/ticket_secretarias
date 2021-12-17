<?php

if(isset($POST["Enviar"])){
//Criação das variáveis
  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $instituicao=$_POST['instituicao'];
  $assunto=$_POST['assunto'];
  $contato=$_POST['contato'];
  $namecidade=$_POST['namecidade'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $to = "lcosta@itaperuna.unimed.com.br";


/*
//campo do e-mail
$arquivo ="
<html>
<p><b>Nome: </b>$nome</p>
<p><b>E-mail: </b>$email</p>
<p><b>Mensagem: </b>$instituicao</p>
<p><b>Mensagem: </b>$assunto</p>
<p><b>Mensagem: </b>$contato</p>
<p><b>Mensagem: </b>$namecidade</p>

<p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
</html>
";

//Emails de destino para quem serão enviados
$destino = "lucascostadev@gmail.com";
$assunto = "";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";
*/
//Enviar
mail($to="lcosta@itaperuna.unimed.com.br",$nome, $email, $instituicao, $assunto, $contato, $namecidade);
}
//echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";

?>