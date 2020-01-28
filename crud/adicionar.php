<?php
    # Header
    include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo cliente</h3>
        <form action="php-actions/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text"name="nome" id="nome" required>
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text"name="sobrenome" id="sobrenome" required>
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email"name="email" id="email" required>
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="text"name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
            <a href="index.php" type="submit" class="btn blue">Lista de clientes</a>
        </form>
    </div>
</div>

<?php
    # Footer
    include_once 'includes/footer.php';
?>