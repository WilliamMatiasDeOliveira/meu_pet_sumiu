<?php
$title = "Login";
require_once "Layouts/header.php";
require_once "Layouts/nav.php";

if (isset($_SESSION['success_create'])) {
    $success_create = $_SESSION['success_create'];
    unset($_SESSION['success_create']);
}
if (isset($_SESSION['login_failed'])) {
    $login_failed = $_SESSION['login_failed'];
    unset($_SESSION['login_failed']);
}
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-5">

            <?php if (isset($success_create)): ?>
                <div class="alert alert-success text-center">
                    <?= $success_create ?>
                </div>
            <?php endif; ?>

            <?php if (isset($login_failed)): ?>
                <div class="alert alert-danger text-center">
                    <?= $login_failed ?>
                </div>
            <?php endif; ?>

            <h1 class="text-primary text-center">Login</h1>

            <form action="/meu_pet_sumiu/login_submit" method="post">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control">

                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control mt-3">

                <div class="d-flex justify-content-between mt-3">
                    <a href="/meu_pet_sumiu/create_account">Ainda não tem conta ?</a>
                    <a href="">Esqueceu a senha ?</a>
                </div>

                <input type="submit" value="Login" class="btn btn-primary form-control mt-4">
            </form>
        </div>
    </div>
</div>

<?php
require_once "Layouts/footer.php";
?>