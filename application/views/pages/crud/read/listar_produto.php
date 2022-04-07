<?php
$this->load->view('layout/sidebar/sidebar_Produto.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Produtos</h4>
            <hr>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> Descrição do Produto </th>
                  <th> Preço Unitário </th>
                  <th> Unidade de Medida</th>
                  <th> Outras Informações </th>
                  <th>Status</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <?php
              if (count($produto) > 0) {
                foreach ($produto as $produto) { ?>
                  <tbody>
                    <tr>
                      <td><?= $produto->descricao ?></td>
                      <td><?= $produto->preco_unit ?></td>
                      <td><?= $produto->quantidd ?></td>
                      <td><?= $produto->outras_info ?></td>
                      <td><?php
                      // Faz a verificação do status do produto
                      // Se tiver valor 1 no bd ele imprime o status como ativo...
                          if ($produto->status == '1') {
                            echo 'Ativo';
                            // caso contrário, imprime ostatus como inativo
                          } else {
                            echo 'Inativo';
                          }
                          ?></td>
                      <td><button class="btn-warning">
                      <a href="<?php echo site_url('main/CarregaTelaEditarProduto/'.$produto->id_produto) ?>">Editar</a></td>
                      </button>
                    <?php
                  }
                } else { ?>
                    <tr>
                      <td>Não há produtos cadastrados!</td>
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