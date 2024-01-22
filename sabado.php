<?php
    include'tabela.php';
?>
<!--Puxa o todo html de tabelas e criação dos botões (codificação comum entre as páginas)-->  

<?php
    $dns = 'mysql:host=localhost;port=3306;dbname=horario;charset=utf8';
	$usuario = 'root';
	$senha = '';
	
	$opcoes = [
	  PDO::ATTR_PERSISTENT => true
	];
	
	try{
		$pdo = new PDO($dns, $usuario, $senha, $opcoes);
	}catch (PDOException $e) {
		exit ('Erro: ' . $e ->getmessage());
	}
	

	$itinerario = $pdo->query('select agendado, dias, estimado, linha FROM sabado');
	
?>
<!--Toda conexão do sistema com banco de dados-->

<?php while($tabela = $itinerario->fetchObject()): ?>
    <tr class="info">
      <td style="text-align:center"><?=$tabela->linha;?></td>
      <td style="text-align:center"><?=$tabela->agendado;?></td>
      <td style="text-align:center"><?=$tabela->estimado;?></td>
	  <td style="text-align:center"><?=$tabela->dias;?></td>
	  <td style="text-align:center"><input type="checkbox"></td>
    </tr>
<?php endwhile ?>
<!--Puxa os registros para dentro da tabela-->
