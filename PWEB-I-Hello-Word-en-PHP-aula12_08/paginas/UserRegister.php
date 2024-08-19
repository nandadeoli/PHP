<?php

include "./aula03_funcao.php";

include "../db.class.php";

head();

$db = new db();
$db->conn();


if (!empty($_POST['id'])) {
  //    var_dump($_POST);
  //      exit;
  $db->update([
    'nome' => $_POST['nome'],
    'telefone' => $_POST['telefone'],
    'cpf' => $_POST['cpf'],
    'id' => $_POST['id'],
  ]);
  
} else if (!empty($_POST)) {
  //    var_dump($_POST);
  //      exit;
  $db->insert([
    'nome' => $_POST['nome'],
    'telefone' => $_POST['telefone'],
    'cpf' => $_POST['cpf'],
  ]);
}

if (!empty($_GET['id'])) {
  $data = $db->find($_GET['id']);
  // var_dump($data);
  //   exit;
}



?>
<div class="col">

  <form action="UserRegister.php" method="post">

    <h3> Registrar Usuario </h3>

    <div class="mb-3">

      
      <label for="Nome" class="form-label">Nome</label>
      <input type="Nome" 
        class="form-control" 
        name="nome" 
        placeholder="">
    </div>

    <div class="mb-3">

      <label for="CPF" class="form-label">CPF</label>
      <input type="CPF" 
        class="form-control" 
        name="cpf" 
        placeholder="">
    </div>

    <div class="mb-3">
      <label for="Senha" class="form-label">Senha</label>
      <input type="Senha" 
        class="form-control" 
        name="senha" 
        placeholder="***********">
    </div>

    <button type="submit" class="btn btn-outline-success">Salvar</button>
    <a class="btn btn-outline-danger" href="./alunoList.php" role="button">Voltar</a>

  </form>
</div>


<?php
footer();
?>