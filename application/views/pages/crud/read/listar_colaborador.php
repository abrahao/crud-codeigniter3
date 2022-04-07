<?php
$this->load->view('layout/sidebar/sidebar_colaborador.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Colaboradores</h4>
            <hr>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> Categoria </th>
                  <th> Nome </th>
                  <th>Razão Social</th>
                  <th>CPF</th>
                  <th>CNPJ</th>
                  <th> E-mail </th>
                  <th> Telefone </th>
                  <th> Endereço </th>
                  <th> Bairro </th>
                  <th> Cidade </th>
                  <th>Ativo?</th>
                  <th>Ação</th>
              </thead>
              <?php

              // Se houver registro na tabela colaborador...
              if (count($colaborador) > 0) {
                // Varre a tabela colaborador e retorna seus valores
                foreach ($colaborador as $colaborador) { ?>
                  <tbody>
                    <tr>
                    <td><?= $colaborador->categoria ?></td>
                      <td><?= $colaborador->nome ?></td>
                      <td><?= $colaborador->razao ?></td>
                      <td><?= $colaborador->cpf ?></td>
                      <td><?= $colaborador->cnpj ?></td>
                      <td><?= $colaborador->email ?></td>
                      <td><?= $colaborador->fone ?></td>
                      <td><?= $colaborador->endereco ?></td>
                      <td><?= $colaborador->bairro ?></td>
                      <td><?= $colaborador->cidade ?></td>
                      <td><?php
                      // Faz a verificação do status do colaborador
                      // Se estiver como 'on' no bd ele imprime o status como ativo...
                          if ($colaborador->status == '1') {
                            echo 'Ativo';
                            // caso contrário, imprime ostatus como inativo
                          } else {
                            echo 'Inativo';
                          }
                          ?></td>
                      <td><button class="btn-warning">
                          <a href="<?php echo site_url('main/carregafTelaeditarColaborador/'.$colaborador->id_colaborador) ?>">Editar</a></td>
                      </button>
                    <?php
                  }
                  // ...se não houver registro na tabela colaborador...
                } else { ?>
                    <tr>
                      <!-- ...será apresentada a mensagem a seguir -->
                      <td>Não há colaboradores cadastrados!</td>
                    </tr>
                  <?php } ?>
                  </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>