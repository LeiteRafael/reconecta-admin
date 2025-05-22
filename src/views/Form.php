<form id="user-form" method="POST" action="/?action=store" class="container mt-4" style="max-width: 800px;">
    <div class="row g-3 align-items-end">
        <div class="col-md-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
        </div>
        <div class="col-md-3">
            <label for="congrad" class="form-label">Congrad</label>
            <input type="text" class="form-control" id="congrad" name="congrad" placeholder="Congrad" required>
        </div>
        <div class="col-md-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" required>
        </div>
        <div class="col-md-3 d-grid">
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </div>
    </div>
</form>