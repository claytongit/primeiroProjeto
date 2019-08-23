<?php
	require_once "../_db/conexao.php";
	$p = new client("localhost", "epiz_24320484_one", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Clayton Dev-Web</title>
	<link rel="stylesheet" type="text/css" href="../_css/sIndex.css">
</head>
<body>
	<?php
	if(isset($_POST["mensagem"])){
		$nome = addslashes($_POST["nome"]);
		$mensagem = addslashes($_POST["mensagem"]);
		$instagram = addslashes($_POST["instagram"]);

		if(!empty($nome) && !empty($mensagem)){			
			$p->enviar($nome, $mensagem, $instagram);
			echo "<script type='text/javascript'>window.alert('mensagem enviada com sucesso!')</script>";			
		}else{
			echo "<script type='text/javascript'>window.alert('ERROR! preencha todos os campos corretamante')</script>";
		}
		
	}

	?>
	<section id="central">
		<div class="menu">
			<form method="POST">
				<div class="comentario">
					<h4>Informe seu comentario ou uma opinião a respeito do site</h4>
					<input type="text" id="nome" name="nome" placeholder="Informe seu nome" autocomplete="off">
					<input type="text" id="instagram" name="instagram" placeholder="instagram" autocomplete="off">
					<textarea placeholder="Digite aqui seu comentario" name="mensagem" autocomplete="off"></textarea>
					<input type="submit" value="enviar">
				</div>
				<div class="coment">
					<a class="button" href="../index.php">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<-Voltar a HOME
					</a>
				</div>
			</form>			
			
		</div>
	</section>
	<footer>
		<p class="footer">&#169;clayton</p>
	</footer>
</body>
</html>