<td colspan = "2" >
    <?php if ($acesso->hasPermission('financeiro') == true): ?>
        <a class="btn btn=success" href="/oferta/oferta/novo/<?php echo $discipulo->id ?>" >
            <i class="icon-money"></i>
        </a>
    <?php endif ; ?>
    <a href="/discipulo/discipulo/atualizar/id/<?php echo $discipulo->id ?>" class = "btn btn-mini btn-primary " >
        <i class="icon-edit icon-white"></i> Atualizar
    </a>
    <?php if ($discipulo->eLider() ) : ?>
    <a target="blank" id = "" href="/discipulo/discipulo/listarPorLider/id/<?php echo $discipulo->id ?>" class = "btn btn-mini btn-info " alt = "Discipulos por líder" ><i class="icon-user icon-white"></i> Discs</a>
    <?php endif ; ?>



    <div class="btn-group ">
    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
        Encontro
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
        <a id = "<?php echo $discipulo->id ?>" href="/encontroComDeus/participantesEncontro/novoParticipante/id/<?php echo $discipulo->id ?>" class = "" alt = "" ><i class="icon-plus"></i>Cadastrar no Encontro</a></li>
        <li>
    <?php if ($acesso->hasPermission('admin_acesso') == true): ?>
        <a id = "<?php echo $discipulo->id ?>" href="/encontroComDeus/equipe/novoMembro/id/<?php echo $discipulo->id ?>" class = "" alt = "" > <i class="icon-wrench"></i>Trabalhar no Encontro</a>
</li>
<?php endif; ?>
        <li>
        <a id = "<?php echo $discipulo->id ?>" href="/encontroComDeus/preEquipe/novoMembro/id/<?php echo $discipulo->id ?>" class = "" alt = "" > <i class="icon-wrench"></i>Pre Equipe</a>
</li>

    </ul>
    </div>

        <a id="<?php echo $discipulo->id ?>" href="/batismo/batismo/novo/id/<?php echo $discipulo->id ?>" class = "btn btn-mini" alt = "" > Batismo</a>

        <?php if ($discipulo->ativo == 1 ) : ?>
    <a id = "<?php echo $discipulo->id ?>" href="#desativar" class = "btn btn-mini btn-warning " alt = "Desativar" ><i class="icon-arrow-down icon-white"></i>Desativar</a>
        <?php else : ?>
            <?php if ($acesso->hasPermission('admin_acesso') == true): ?>
                <a id = "<?php echo $discipulo->id ; ?>"
                   href="#ativar" class = "btn btn-mini btn-success " alt = "ativar" >
                <i class="icon-arrow-up icon-white"></i>Ativar</a>
            <?php endif ; ?>
        <?php endif ; ?>
<?php if ($acesso->hasPermission('admin_acesso') == true): ?>
    <?php if ($discipulo->arquivo == 0):?>
    <a id = "<?php echo $discipulo->id ; ?>" href="/discipulo/discipulo/arquivar/id/<?php echo $discipulo->id?>"
       class = "btn btn-mini btn-inverse " >
        <i class=""></i>Arquivar
    </a>
    <?php endif; ?>
        <a id = "<?php echo $discipulo->id ?>" href="/discipulo/discipulo/excluir/id/<?php echo $discipulo->id ?>" class = "btn btn-mini btn-danger" alt = "excluir" ><i class="icon-remove icon-white"></i>excluir</a>

<?php endif ; ?>
</td>
