<?php
$title = "Create Account";
require_once "Layouts/header.php";
require_once "Layouts/nav.php";

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}


?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-5">

            <h1 class="text-center">Create Account</h1>

            <!-- Se o email que esta tentando criar a conta já estiver cadastrado mostra a menssagem -->
            <?php if (!empty($error['email_exists'])): ?>
                <div class="alert alert-danger">
                    <?= $error['email_exists'] ?>
                </div>
            <?php endif; ?>

            <form action="/meu_pet_sumiu/create_account_submit" method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
                <?php if(!empty($error['nome'])): ?>
                    <div class="text-danger">
                        <?= $error['nome'] ?>
                    </div>
                <?php endif; ?>


                <label for="email" class="mt-3">E-mail</label>
                <input type="email" name="email" class="form-control">
                 <?php if(!empty($error['email'])): ?>
                    <div class="text-danger">
                        <?= $error['email'] ?>
                    </div>
                <?php endif; ?>

                <label for="senha" class="mt-3">Senha</label>
                <input type="password" name="senha" class="form-control">
                 <?php if(!empty($error['senha'])): ?>
                    <div class="text-danger">
                        <?= $error['senha'] ?>
                    </div>
                <?php endif; ?>

                <label for="celular" class="mt-3">Celular</label>
                <input type="text" name="celular" class="form-control">
                 <?php if(!empty($error['celular'])): ?>
                    <div class="text-danger">
                        <?= $error['celular'] ?>
                    </div>
                <?php endif; ?>

                <div class="d-flex justify-content-between mt-3">
                    <a href="/meu_pet_sumiu/login">Já tem conta ?</a>
                </div>

                <input type="submit" value="Create Account" class="btn btn-warning form-control mt-4 mb-5">
            </form>
        </div>
    </div>
</div>

<?php
require_once "Layouts/footer.php";
?>





<?php
require_once "Layouts/footer.php";
?>