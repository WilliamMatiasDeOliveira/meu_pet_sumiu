<?php
    $title = "Dashboard";
    require_once "Layouts/header.php";
    require_once "Layouts/nav.php";

    // if(isset($_SESSION['auth'])){
    //     $auth = $_SESSION['auth'];
    // }
?>

<div class="container mt-5">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-3 col-sm-6">
      <div class="card-dashboard bg-primary text-white text-center p-4 rounded-4 shadow">
        <h4>Usuários</h4>
        <p>Gerenciar usuários</p>
        <a href="#" class="btn btn-light btn-sm">Acessar</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-sm-6">
      <div class="card-dashboard bg-success text-white text-center p-4 rounded-4 shadow">
        <h4>Pets Achados</h4>
        <p>Ver lista</p>
        <a href="#" class="btn btn-light btn-sm">Acessar</a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-sm-6">
      <div class="card-dashboard bg-warning text-dark text-center p-4 rounded-4 shadow">
        <h4>Pets Perdidos</h4>
        <p>Cadastrar novo</p>
        <a href="#" class="btn btn-dark btn-sm">Acessar</a>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-sm-6">
      <div class="card-dashboard bg-danger text-white text-center p-4 rounded-4 shadow">
        <h4>Relatórios</h4>
        <p>Gerar relatório</p>
        <a href="#" class="btn btn-light btn-sm">Acessar</a>
      </div>
    </div>

  </div>
</div>


<?php
    require_once "Layouts/footer.php";
?>






