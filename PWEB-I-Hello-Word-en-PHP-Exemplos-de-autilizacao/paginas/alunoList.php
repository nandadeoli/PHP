
<?php
include "./aula03_funcao.php";
include "../db.class.php";

head();
$db = new db();
$db->conn();

$dados = $db->all();

//var_dump($dados);
//exit;

?>
<div class="col">
  
<h3>Listagem de Alunos</h3>
  
  <div class="container-fluid">
    <form class="d-flex" role="search">

<div class = "col-md-4 px-2">
   <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
</div>
      
<div class="col-4">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      <a href="./AlunoForm.php" class="btn btn-primary">Novo</a>
</div>
    </form>
  </div>
  
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($dados as $item){

    //var_dump($dados);
    //exit;
    echo "<tr>
    <tr>
      <th scope='row'>$item->id</th>
      <td>$item->nome</td>
      <td>$item->cpf</td>
      <td>$item->telefone</td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</div>

<?php
footer();
  ?>