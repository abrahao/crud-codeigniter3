<?php
$this->load->view('layout/sidebar/sidebar_produto.php');
$this->load->library('form_validation');
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastrar Produto</h4>
                        <form class="forms-sample" action="<?php echo site_url('main/cadastrarproduto'); ?>" method="post">
                            <div class="form-group">
                                <label for="descricao">Descrição do Produto</label>
                                <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto" required>
                            </div>
                            <div class="form-group">
                                <label for="preco_unit">Preço Unitário</label>
                                <input type="number" class="form-control" name="preco_unit" placeholder="1234" required>
                            </div>
                            <div class="form-group">
                                <label for="quantidd">Quantidade</label>
                                <input type="text" class="form-control" name="quantidd" placeholder="10">
                            </div>
                            <div class="form-group">
                                <label for="outras_info">Outras Informações</label>
                                <input type="text" class="form-control" name="outras_info" placeholder="Outras Informações">
                            </div>
                            <div class="form-group" id="status">
                                Ativo?
                                <input type="checkbox" name="status" value="1" />
                                <input hidden type="checkbox" name="status" value="0" />
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

<script type="text/javascript">
    // when page is ready
    $(document).ready(function() {
        // on form submit
        $("#form").on('submit', function() {
            // to each unchecked checkbox
            $(this).find('input[type=checkbox]:not(:checked)').prop('checked', true).val(0);
        })
    })
</script>