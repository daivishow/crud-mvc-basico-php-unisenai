<?php $carros = $dados['carros']; ?>

<h2 class="mb-4">Estoque de Carros</h2>

<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($carros as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['modelo'] ?></td>
            <td><?= $c['cor'] ?></td>
            <td>
                <a href="?acao=vender&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm">
                    Vender
                </a>

                <a href="?acao=deletar&id=<?= $c['id'] ?>" class="btn btn-danger btn-sm">
                    Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>