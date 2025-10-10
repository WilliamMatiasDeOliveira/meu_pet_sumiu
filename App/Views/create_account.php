<?php
    require_once "Layouts/header.php";
    require_once "Layouts/nav.php";
?>

<?php
    require_once "Layouts/header.php";
    require_once "Layouts/nav.php";
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-5">

            <h1 class="text-center">Create Account</h1>

            <form action="/meu_pet_sumiu/create_account_submit" method="post">
                <label for="nome">Nome</label>
                <input type="text"name="nome"class="form-control">

                <label for="email"class="mt-3">E-mail</label>
                <input type="email"name="email"class="form-control">

                <label for="senha"class="mt-3">Senha</label>
                <input type="password"name="senha"class="form-control">

                <label for="celular"class="mt-3">Celular</label>
                <input type="text"name="celular"class="form-control">

                <div class="d-flex justify-content-between mt-3">
                    <a href="/meu_pet_sumiu/login">Já tem conta ?</a>
                </div>

                <input type="submit"value="Create Account"class="btn btn-warning form-control mt-4 mb-5">
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