<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<?php include 'incluidos/css.inc.php' ; ?>
		<?php include 'incluidos/js.inc.php' ; ?>

<link rel="stylesheet" type="text/css" href="/ext/markitup/markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="/ext/markitup/markitup/sets/default/style.css" />

		<script src="/modulos/discipulo/visao/js/combobox.js"></script>

<script type="text/javascript" src="/ext/markitup/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="/ext/markitup/markitup/sets/default/set.js"></script>

<script type="text/javascript" >
   $(document).ready(function() {
      $("#markItUp").markItUp(mySettings);
   });
</script>


	</head>

	<body>
		<section class = "container-fluid">
		<header>
			<nav>
			<?php include 'modulos/menu/visao/menu.inc.php' ; ?>	
			</nav>
		
		</header>

		<section>		
			<article>
				
		    <form class="well " action = "/celula/relatorio/novo" method = "post"  >
						<div class="row-fluid">
						<div class="span3">
							<label>Tema</label>
							<input name = "titulo" type="text" class="input-block-level" maxlength = "45" placeholder="Tema do Relatório" required>
							<label>Data Envio</label>
							<input name = "dataEnvio" type="text" class="input-block-level" placeholder="" value = "<?php echo $dataEnvio ; ?>" disabled >
							<label>Líder</label>
							<input name = "liderId" type="text" class="input-block-level" placeholder="" value = "<?php echo $lider->nome ; ?>" disabled >
							<label>Célula</label>
							<input name = "celula" type="text" class="input-block-level" placeholder="" value = "<?php echo $celula->nome ; ?>" disabled >

							<input name = "celulaId" type="hidden" class="span3" placeholder="" value = "<?php echo $celula->id ; ?>">
							<input name = "lider" type="hidden" class="span3" placeholder="" value = "<?php echo $lider->id ; ?>" >

						</div>

						<div class="span9">
							<label>Relatório</label>
							<textarea id = "markItUp" name="texto"  class="input-block-level" rows="10" required ></textarea>
						</div>

						<div class = "span12" >	
						<table class = "table" >
							<caption>Paticipação Discipulos</caption>
							<tr> <td><input type = "checkbox" ></td> </tr>
						</table>
						</div>

						<button type="submit" class="btn btn-primary ">enviar</button>
						<a href="/celula/celula"  class="btn  right">voltar</a>
						</div>
    </form>	
			</article>
		
		</section>

		</section>
	</body>



</html>
