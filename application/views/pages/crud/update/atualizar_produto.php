<?php
$this->load->view('layout/sidebar/sidebar_produto.php');
$this->load->library('form_validation');
?>

<!-- Página de alteração dos dados do produto -->
<!-- os values = "" estão puxando os dados do bd -->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastrar Produto</h4>

                        <!-- a action do form está chamando o método editarProduto que se encontra no Controller main -->

                        <form class="forms-sample" action="<?php echo site_url('main/editarProduto/'.$produto->id_produto); ?>" method="post">
                            <div class="form-group">
                                <label for="descricao">Descrição do Produto</label>
                                <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto" value="<?=$produto->descricao?>">
                            </div>

                            <div class="form-group">
                                <label for="preco_unit">Preço Unitário</label>
                                <input type="number" class="form-control" name="preco_unit" placeholder="1234" value="<?=$produto->preco_unit?>">
                            </div>

                            <div class="form-group">
                                <label for="quantidd">Unidade de Medida</label>
                                <input type="text" class="form-control" name="quantidd" placeholder="10" value="<?=$produto->quantidd?>">
                            </div>

                            <div class="form-group">
                                <label for="outras_info">Outras Informações</label>
                                <input type="text" class="form-control" name="outras_info" placeholder="Outras Informações" value="<?=$produto->outras_info?>">
                            </div>

                            <div class="form-group" id="status">
                                Ativo?
                                <input type="checkbox" name="status" id="status" value="1" />
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

