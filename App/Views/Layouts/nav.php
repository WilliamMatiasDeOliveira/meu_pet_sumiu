<?php
if (isset($_SESSION['auth'])) {
    $auth = $_SESSION['auth'];
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/meu_pet_sumiu">Meu Pet Sumiu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/meu_pet_sumiu">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/meu_pet_sumiu/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/meu_pet_sumiu/create_account">Cadastrar</a>
                </li>

            </ul>
        </div>

        <?php if (isset($auth)): ?>
            <div class="auth-info d-flex justify-content-around align-items-center col-5">
                <div class="user-name">
                    <strong>Usuario:</strong> <?= $auth['email'] ?>
                </div>
                <div class="logout">
                    <form action="/meu_pet_sumiu/logout" method="post">
                        <input type="submit"value="LOGOUT"class="btn btn-danger">
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
</nav>