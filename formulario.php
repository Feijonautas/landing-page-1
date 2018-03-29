<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$pergunta = addslashes($_POST['pergunta']);
	
	$para = "yuridemeello@gmail.com";
	$assunto = "Pergunta";
	$corpo = "nome".$nome."e-mail".$email."msg".$pergunta;
	$titulo = "From: yuridemeello@gmail.com"."\r\n".
			  "Reply-To: ".$email."\r\n".
			  "X-Mailer: PHP/".phpversion();
	
	mail($para, $assunto, $corpo, $titulo);
	
	echo "Enviado";
	exit;
}
?>
<form method="post">
	<input type="text" name="nome">
	<input type="email" name="email">
	<textarea type="text" name="pergunta"></textarea>
	<input type="submit" value="enviar">
</form>