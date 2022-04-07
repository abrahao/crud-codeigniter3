<?php

class Login_model extends CI_Model
{

    public function index()
    {
        // Carrega as views de cabeçalho do layout da página
        $this->load->view('pages/login/login');
    }

    public function entrar()
    {

    }
}
