<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Tiago Panis Macichonek">
    <meta name="description" content="Projeto desenvolvido para conclusão da cadeira de projeto aplicado - Escolas e Faculdades QI.">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Toda parte de metadados e linkagem de css e Bootstrap--> 
	<title>Monitor de Itinerários</title>	
	<div class="pull-right">
	  <button onclick="window.location.href = 'index.html'" style="color: white; background-color: #FF8C00" accesskey="v" title="Atalho (Alt + v)">Sair</button>
	 </div> 
<!--Cria o botão sair e posiciona ele no canto direito-->
  </head>

 
  <body>
    <p><h3>Monitor de itinerário</h3></p>

      <a href="diasuteis.php" style="text-align:center" accesskey="u" title="Atalho (Alt + u)">
         <input type="button" value="Dias Úteis" style="color: black; background-color: #E6E6FA" />
      </a>
      <a href="sabado.php" style="text-align:center"accesskey="s" title="Atalho (Alt + s)">
         <input type="button" value="Sábado" style="color: black; background-color: #E6E6FA" />
      </a>
      <a href="domingo.php" style="text-align:center" accesskey="w" title="Atalho (Alt + w)">
         <input type="button" value="Domingo" style="color: black; background-color: #E6E6FA"/>
      </a>
<!--Cria botoões de alternação entre tabelas-->

     
	<div class="table-responsive">
	  <table class="table" border="2" width=100% height=100%>
        <tr class="warning">
          <td style="text-align:center"><h4>Linha</h4></td> 
          <td style="text-align:center"><h4>Saída</h4></td>
          <td style="text-align:center"><h4>Chegada</h4></td>
	      <td style="text-align:center"><h4>Tabela</h4></td>
	      <td style="text-align:center"><h4>Status</h4></td>
        </tr>
	</div>
<!--Cria tabela com os cabeçalhos-->  

<footer class="footer navbar-fixed-bottom" style="color: white; background-color: blue; text-align: center"/>
Para mais informações nos ligue: (051) 1234-5678
</footer>

  </body>
</html>

