<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	// O model main_model é carregado no construct
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
	}

	// Método responsável por carregar a view home, ou página inicial
	// Carrega as views na ordem em que se segue
	// Primeiro o cabeçalho, depois a home, ou página inicial e por fim, o rodapé
	public function index()
	{
		// Carrega as views de cabeçalho do layout da página
		$this->load->view('pages/login/login.php');
	}

	public function home()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('home');
	}

	// Método responsável por carregar a view da página do colaborador
	public function colaborador()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pages/colaborador');
	}

		// Método responsável por carregar a view da página do produto
	public function produto()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pages/produto');
	}

	//==========================================================
	// Operações que serão feitas no BD

	// Método responsável por carregar a view do formulário de criação de colaborador
	// Carrega as views na ordem em que se segue
	// Primeiro o cabeçalho, depois o formulário de criação de colaborador e por fim, o rodapé
	public function criar_colaborador()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pages/crud/create/criar_colaborador');
	}

	// Método responsável por carregar a view do formulário de criação de produto
	// Carrega as views na ordem em que se segue
	// Primeiro o cabeçalho, depois o formulário de criação de colaborador e por fim, o rodapé
	public function criar_produto()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pages/crud/create/criar_produto');
	}

	// Método responsável por obter e exibir os dados da tabela colaborador inseridos no bd 
	public function listar_colaborador()
	{
		$this->load->view('layout/cabecalho');

		// O array $data recebe a Método getAllColaborador() que está no model...
		$data['colaborador']  = $this->main_model->getAllColaborador();
		// ... pega os dados que foram trazidos e joga na view listar_colaborador
		$this->load->view('pages/crud/read/listar_colaborador', $data);
		$this->load->model('main_model');
	}

	// Método responsável por obter e exibir os dados da tabela produto inseridos no bd 
	public function listar_produto()
	{

		$this->load->view('layout/cabecalho');

		$data['produto']  = $this->main_model->getAllProduto();
		$this->load->view('pages/crud/read/listar_produto', $data);
		$this->load->model('main_model');
	}

	// Método responsável por chamar a Método de inserir os dados na tabela colaborador do bd
	public function cadastrarcolaborador()
	{
		$this->load->model('main_model');
		// Chamada do método inserir_colaborador() que se encontra no model
		$this->main_model->inserir_colaborador();
		redirect('main/listar_colaborador');
	}

	// Método responsável por chamar a Método de inserir os dados na tabela produtos do bd
	public function cadastrarproduto()
	{
		$this->load->model('main_model');
		// Chamada do método inserir_produto() que se encontra no model
		$this->main_model->inserir_produto();
		redirect('main/listar_produto');

	}


	public function carregafTelaeditarColaborador($id_colaborador){
		$this->load->view('layout/cabecalho');
		// Chamada do método getColaborador(), passando o id correspondente, que se encontra no model
		$data['colaborador'] = $this->main_model->getColaborador($id_colaborador);
		$this->load->view('pages/crud/update/atualizar_colaborador',$data);
	}

	// Método que pega os dados inseridos via post
	public function editarColaborador($id_colaborador){
		$data['nome'] = $this->input->post('nome');
		$data['cnpj'] = $this->input->post('cnpj');
		$data['cpf'] = $this->input->post('cpf');
		$data['razao'] = $this->input->post('razao');
		$data['email'] = $this->input->post('email');
		$data['fone'] = $this->input->post('fone');
		$data['login'] = $this->input->post('login');
		$data['senha'] = $this->input->post('senha');
		$data['endereco'] = $this->input->post('endereco');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['categoria'] = $this->input->post('categoria');
		$data['status'] = $this->input->post('status');
		
		// Chama o método editarColaborador do model
		$this->main_model->editarColaborador($id_colaborador,$data);
		// Redireciona para a página home após realizar a ação
		redirect('main/listar_colaborador');
	}

	// Carrega os campos do formulário atualizar_produto com as informações correspondentes do bd..
	public function CarregaTelaEditarProduto($id_produto){
		$this->load->view ('layout/cabecalho');
		$data['produto'] = $this->main_model->getProduto($id_produto);
		$this->load->view('pages/crud/update/atualizar_produto',$data);
	}

	// ...realiza a ação de editarProduto, mudando as informações anteriores para as novas preenchidas
	public function editarProduto($id_produto){
		$data['descricao'] = $this->input->post('descricao');
		$data['preco_unit'] = $this->input->post('preco_unit');
		$data['quantidd'] = $this->input->post('quantidd');
		$data['outras_info'] = $this->input->post('outras_info');
		$data['status'] = $this->input->post('status');
		$this->main_model->editarproduto($id_produto,$data);
		redirect('main/listar_produto');
	}

	public function sair(){
		$this->load->view('pages/login/login.php');
	}
}
