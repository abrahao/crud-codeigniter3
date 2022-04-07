<?php
$this->load->view('layout/sidebar/sidebar_colaborador.php');
$this->load->library('form_validation');
?>

<!-- Página de alteração dos dados do colaborador -->
<!-- os values = "" estão puxando os dados do bd -->

<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" action="<?php echo site_url('main/editarColaborador/'.$colaborador->id_colaborador); ?>" method="post">
            <div class="row">
                <div class="col-md-6 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                Categoria do Colaborador: <select required name="categoria" id="categoria" onchange="escolher_categoria(this)">
                                    <option value="" readonly selected></option>
                                    <option value="usuario" name="usuario" id="usuario" >Usuário</option>
                                    <option value="fornecedor" name="fornecedor" id="fornecedor">Fornecedor</option>
                                </select>
                            </div>

                            <br>
                            <div class="form-group">
                                <input type="number" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ" value="<?=$colaborador->cnpj?>">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="razao" id="razao" placeholder="Razão Social" value="<?=$colaborador->razao?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Colaborador" value="<?=$colaborador->nome?>">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF do Colaborador" value="<?=$colaborador->cpf?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="login" id="login" placeholder="Login de Acesso" value="<?=$colaborador->login?>">
                            </div>

                            <div class="form-group">
                                <input type="senha" class="form-control" name="senha" id="senha" placeholder="Senha de Acesso" value="<?=$colaborador->senha?>">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?=$colaborador->email?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="fone" id="fone" placeholder="Telefone" value="<?=$colaborador->fone?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua" value="<?=$colaborador->endereco?>"> 
                            </div>

                            <div class="form-group">
                                <input type="bairro" class="form-control" name="bairro" id="bairro" placeholder="Bairro" value="<?=$colaborador->bairro?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="<?=$colaborador->cidade?>">
                            </div>

                            <div class="form-group" id="status">
                                Ativo? <input type="checkbox" name="status" id="status" value="1">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    // Habilta os campos no formulário conforme a escolha entre usuário e fornecedor
    // os campos que não são de determinada categoria estarão invisíveis
    function escolher_categoria(val) {
        if (val.value == '*') {
            // Todos os campos são invisibilizados
            document.getElementById('cnpj').style.display = 'none';
            document.getElementById('razao').style.display = 'none';
            document.getElementById('nome').style.display = 'none';
            document.getElementById('cpf').style.display = 'none';
            document.getElementById('email').style.display = 'none';
            document.getElementById('fone').style.display = 'none';
            document.getElementById('endereco').style.display = 'none';
            document.getElementById('bairro').style.display = 'none';
            document.getElementById('cidade').style.display = 'none';
            document.getElementById('login').style.display = 'none';
            document.getElementById('senha').style.display = 'none';
            document.getElementById('status').style.display = 'none';
            document.getElementById('submit').style.display = 'none';
            document.getElementById('cancel').style.display = 'none';

        } else if (val.value == 'fornecedor') {
            document.getElementById('cnpj').style.display = 'block';
            document.getElementById('razao').style.display = 'block';
            document.getElementById('nome').style.display = 'none';
            document.getElementById('cpf').style.display = 'none';
            document.getElementById('email').style.display = 'block';
            document.getElementById('fone').style.display = 'block';
            document.getElementById('endereco').style.display = 'block';
            document.getElementById('bairro').style.display = 'block';
            document.getElementById('cidade').style.display = 'block';
            document.getElementById('login').style.display = 'none';
            document.getElementById('senha').style.display = 'none';
            document.getElementById('status').style.display = 'block';
            document.getElementById('submit').style.display = 'block';
            document.getElementById('cancel').style.display = 'block';

        } else {
            document.getElementById('cnpj').style.display = 'none';
            document.getElementById('razao').style.display = 'none';
            document.getElementById('nome').style.display = 'block';
            document.getElementById('cpf').style.display = 'block';
            document.getElementById('email').style.display = 'block';
            document.getElementById('fone').style.display = 'block';
            document.getElementById('endereco').style.display = 'block';
            document.getElementById('bairro').style.display = 'block';
            document.getElementById('cidade').style.display = 'block';
            document.getElementById('login').style.display = 'block';
            document.getElementById('senha').style.display = 'block';
            document.getElementById('status').style.display = 'block';
            document.getElementById('submit').style.display = 'block';
            document.getElementById('cancel').style.display = 'block';
        }
    }

</script>
