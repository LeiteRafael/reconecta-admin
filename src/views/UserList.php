<h2>Usuários Cadastrados</h2>
<div class="table-responsive">
    <table id="user-table" class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Congrad</th>
                <th>Matrícula</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr draggable="true">
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['congrad']) ?></td>
                    <td><?= htmlspecialchars($user['matricula']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>