<?php
require 'conexao.php'; 
$listagem = mysqli_query($conexao, "SELECT * FROM planetas");
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
				
				<p><strong>Planetas</strong></p>
				<table>
					<tr>
                        <th></th>
						<th>Nome</th>
						<th>Tipo</th>
                        <th>Diâmetro Equatorial</th>
                        <th></th>
                    </tr>
                    <?php 
                    while ($linha = mysqli_fetch_array($listagem)){
                
                    
                    ?>
					<tr>
                        <td><a href="planetas.form.php?teste=<?=$linha['id']?>">Editar</a></td>
						<td><?= $linha['nome']?></td>
						<td><?= $linha['tipo']?></td>
                        <td><?= $linha['tamanho']?></td>
                        <td><a href="planetas.excluir.php?teste=<?=$linha['id']?>">Excluir</a></td>
                    </tr>
                    <?php
                    }
                    ?>
				</table>
			</section>
			<footer></footer>
        </div>
<?php include 'template.rodape.php' ?>