<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style type="text/css">
		   @import url("../../../ext/twitter-bootstrap/bootstrap.css");
		   @import url("../../../incluidos/css/estilo.css");
		</style>
		<script src="../../../ext/jquery/jquery-1.7.1.min.js"></script>
	</head>

	<body>
		<section class = "container">

		<nav> 
			
			<?php include 'modulos/menu/visao/menu.inc.php' ; ?>	
		</nav>
			

		<section>		
			<article>

				<?php require 'modulos/Discipulo/visao/chamarDiscipulo.php' ; ?>

				<div class = "row" >	
						<table class = "table bordered-table">
						<caption><h3>Lista de Discipulos</h3></caption>

						<?php foreach ( $discipulos as $discipulo) : ?>

						<tr><td><a href="/discipulo/detalhar/id/<?php echo $discipulo['id']?>" ><h2><?php echo $discipulo['nome'] ; ?> </h2></a></td>
							<?php require 'Discipulo/visao/menuDiscipulo.inc.php' ; ?>
						</tr>
						<tr><td>Telefone:<?php echo $discipulo['telefone'] ; ?></td> <td>E-mail:<?php echo $discipulo['email'] ; ?></td></tr>
						<tr><td colspan = "2" >Endereço: <?php  echo $discipulo['endereco'] ; ?></td></tr>
							
						
						<?php endforeach ; ?>
						</table>
					<div class = "form-actions" >	
						<?php discipulo\Modelo\Discipulo::mostrarPaginacao( $totalDiscipulos['total'] ,3 ,$pagina ) ; ?>
					</div>
			</div>
			</article>
		
		</section>

		</section>
	</body>
</html>

