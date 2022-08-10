<?php
require 'conexao.php';
include 'template.cabecalho.php';
?>
	
		
		
<div id="right">
			<header><h2><span>Planetas<span></h2></header>
			<section>
				<p>Um planeta &eacute; um corpo celeste que orbita uma estrela ou um remanescente de estrela, com massa suficiente para se tornar esf&eacute;rico pela sua pr&oacute;pria gravidade, mas ns&atilde;o ao ponto de causar fuss&atilde;o termonuclear, e que tenha limpo de planetesimais a sua regis&atilde;o vizinha (domin&acirc;ncia orbital).</p>
				<p>Fonte: <a href="https://pt.wikipedia.org/wiki/Planeta">https://pt.wikipedia.org/wiki/Planeta</a></p>
				
				<form action="" method="">
					<p><strong>Insira um novo planeta no sistema: </strong></p>
					Nome: <input type="text" name="nome" /><br />
					Tipo: 
					<select name="tipo">
						<option value="terrestre">Terrestre</option>
						<option value="gasoso">Gigante Gasoso</option>
						<option value="an&atilde;o">Planeta An&atilde;o</option>
					</select><br />
					Di&acirc;metro Equatorial: <input type="text" name="tamanho" /><br />
					Descri&ccedil;&atilde;o:
					<textarea name="descricao"></textarea>
					<input type="submit" value="enviar" />
				</form>
				
				<p><strong>Planetas</strong></p>
				<table>
					<tr>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Di&acirc;metro Equatorial</th>
					</tr>
					<tr>
						<td>Terra</td>
						<td>Terrestre</td>
						<td>1,0</td>
					</tr>
					<tr>
						<td>Plut&atilde;o</td>
						<td>An&atilde;o</td>
						<td>3,0</td>
					</tr>
					<tr>
						<td>Ur&acirc;nio</td>
						<td>Gasoso</td>
						<td>4,0</td>
					</tr>
				</table>
			</section>
			<footer></footer>
		</div>

<?php
include 'template.rodape.php';
?>