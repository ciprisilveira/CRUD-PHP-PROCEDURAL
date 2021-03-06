<?php
    // conexão
    include_once 'php-actions/db_connect.php';
    // Header
    include_once 'includes/header.php';
    // Select
    if(isset($_GET['id'])){
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    }
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar cliente</h3>
        <form action="php-actions/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text"name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text"name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>" required>
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email"name="email" id="email" value="<?php echo $dados['email']; ?>" required>
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="text"name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn green">Atualizar</button>
            <a href="index.php" type="submit" class="btn blue">Lista de clientes</a>
        </form>
    </div>
</div>

<?php
    // Footer
    include_once 'includes/footer.php';
?>