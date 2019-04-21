<h3 class="mb-5">Administração de páginas</h3>

<?php var_dump($data); ?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><a href="/admin/pages/1">Página Inicial</a> </td>
            <td class="text-right">
                <a href="/admin/pages/1" class="brn btn-primary btn-sm">Ver</a>
            </td>
        </tr>
    </tbody>
</table>

<br><a href="/admin/pages/create" class="btn btn-secondary">Novo</a>