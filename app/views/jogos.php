<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('jogos/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    Nome
    <input type="text" class="form-control" name="nome" value="<?=_v($data,"nome")?>" >
</label>

<label class='col-md-2'>
    categoria
    <input type="text" class="form-control" name="categoria" value="<?=_v($data,"categoria")?>" >
</label>

<label class='col-md-6'>
    Data de Lançamento
    <input type="date" class="form-control" name="datal" value="<?=_v($data,"datal")?>" >
</label>
<label class='col-md-6'>
    Desenvolvedor
    <input type="text" class="form-control" name="desenvolvedor" value="<?=_v($data,"desenvolvedor")?>" >
</label>
<label class='col-md-6'>
    Classificação etária
    <input type="int" class="form-control" name="classificacao" value="<?=_v($data,"classificacao")?>" >
</label>
<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("jogos")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Data de Lançamento</th>
        <th>Desenvolvedor</th>
        <th>Classificação etária</th>
        <th>Excluir</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("jogos/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td><?=$item['nome']?></td>
            <td><?=$item['categoria']?></td>
            <td><?=$item['datal']?></td>
            <td><?=$item['desenvolvedor']?></td>
            <td><?=$item['classificacao']?></td>


            <td>
                <a href='<?=route("jogos/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>