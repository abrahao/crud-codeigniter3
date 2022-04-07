<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        // Carrega as views de cabeçalho do layout da página
        // $this->load->model('login_model/index');

        $this->load->view('pages/login/login');
    }

    public function verificaLogin(){
        $usuario = $this->input->post("usuario");
        $senha = $this->input->post("senha");

        $this->db->where('usuario', $this->input->post('usuario'));
        $this->db->where('senha', $this->input->post('senha'));

        $query = $this->db->get('usuario', $usuario);
        $query = $this->db->get('usuario', $senha);

        if ($query->num_rows() == 1) {
            // echo 'Logado'; 
            $this->load->view('layout/cabecalho');
            $this->load->view('home');           
        } else {
            echo 'Falha';
        }
    }
    
    public function sair(){
        $this->load->view('pages/login/login');
    }
}
