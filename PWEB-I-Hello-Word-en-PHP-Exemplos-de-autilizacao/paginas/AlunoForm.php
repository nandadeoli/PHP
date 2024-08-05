<?php

   include "./aula03_funcao.php";

   include "../db.class.php";

  head();

  $db = new db();
  $db ->conn();


    if(!empty($_POST)){
  //    var_dump($_POST);

//      exit;
        $db->insert([
        'nome'=>$_POST['nome'],
        'telefone'=>$_POST['telefone'],
        'cpf'=>$_POST['cpf'],
        ]);
 }


?>
<div class="col">

<form action="AlunoForm.php" method="post">
   <h3> Formulário Aluno </h3>
  <div class="mb-3">
    <label for="Nome" class="form-label">Nome</label>
    <input type="Nome" class="form-control" name="nome" placeholder="Fernanda">
  </div>

    <div class="mb-3">
      <label for="CPF" class="form-label">CPF</label>
      <input type="CPF" class="form-control" name="cpf" placeholder="324343454">
    </div>

    <div class="mb-3">
      <label for="Telefone" class="form-label">Telefone</label>
      <input type="Telefone" class="form-control" name="telefone" placeholder="49988941130">
    </div>

  <button type="submit" class="btn btn-outline-success">Salvar</button>
  <a class="btn btn-outline-danger" href="./alunoList.php" role="button">Voltar</a>

  </form>
  </div>


  <?php
footer();
?>
