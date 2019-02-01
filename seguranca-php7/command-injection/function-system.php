<!-- 
|--------------------------------------------------------------------------
| system ( string $command [, int &$return_var ] ) : string
|--------------------------------------------------------------------------
| A função system() também tenta automaticamente limpar o buffer de saída 
|do servidor mandando os dados para o browser após cada linha de saída se
|o PHP estiver sendo executado como módulo de servidor.
|Se você precisa executar um comando e ter todos os dados
|do comando passados sem nenhuma interferencia, use a função passthru().
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Funcão System</title>
	</head>
	<body>
		<main>
			<section>
				<form method="POST" action="function-system.php">
					<input type="text" name="cmd">
					<input type="submit" value="enviar">
				</form>	
			</section>

			<?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
				<section>
					<?php
						/*
     					* escapa qualquer caractere em uma string que possa ser utilizado para enganar um comando shell para executar comandos arbritários. Esta função deve ser utilizada para ter certeza que quaisquer dados vindos do usuário é escapado antes que estes dados sejam passados para as funções exec() ou system(), ou para backtick operator.
     					*/
						$cmd = escapeshellcmd( $_POST['cmd'] );
						var_dump($cmd);
					?>
					<div>
						<pre><?php $comando = system($cmd, $retorno);?></pre>
					</div>
				</section>
			<?php endif;?>	
		</main>
	</body>
</html>