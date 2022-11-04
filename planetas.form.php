<?php
require 'conexao.php';
$destina = 'planetas.inserir.php';
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM planetas WHERE id ='id'";
	$linhas = mysqli_query($conexao, $sql);
	$linha = mysqli_fetch_array($linhas);
	$destino = 'planeta.alterar.php';
	 
} 
 include 'template.cabecalho.php'; 
 ?>
<div id="left">
 
			<header><h1><span>Universo Digital<span></h1></header>
			<section>
				<nav>
					<a href="planetas.form.php">Planetas</a> | 
					<a href="#">Estrelas</a> | 
					<a href="#">Sistemas</a>
                </nav>
                <br>
                <nav>
                    <a href="planetas.form.php">Inserir planeta</a> |
                    <a href="planetas.listar.php">Listar planeta</a>
                </nav>
				<div class="clear"></div>
			<section>
			<footer><em>Produzido para o EAD Pernambuco.</em></footer>
		</div>
<div id="right">
			<header><h2><span>Planetas<span></h2></header>
			<section>
				<p>Um planeta é um corpo celeste que orbita uma estrela ou um remanescente de estrela, com massa suficiente para se tornar esférico pela sua própria gravidade, mas não ao ponto de causar fusão termonuclear, e que tenha limpo de planetesimais a sua região vizinha (dominância orbital).</p>
				<p>Fonte: <a href="https://pt.wikipedia.org/wiki/Planeta">https://pt.wikipedia.org/wiki/Planeta</a></p>
				
				<form action="planetas.inserir.php" method="post">
					<p><strong>Insira um novo planeta no sistema: </strong></p>
					Nome: <input type="text" name="nome" /><br />
					Tipo: 
					<select name="tipo">
						<option value="terrestre">Terrestre</option>
						<option value="gasoso">Gigante Gasoso</option>
						<option value="anão">Planeta Anão</option>
					</select><br />
					Diâmetro Equatorial: <input type="text" name="tamanho" /><br />
					Descrição:
					<textarea name="descricao"></textarea>
					<input type="submit" value="enviar" />
				</form>
				
				<p><strong>Planetas</strong></p>
				<table>
					<tr>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Diâmetro Equatorial</th>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
				</table>
			</section>
			<footer></footer>
        </div>
<?php include 'template.rodape.php' ?>