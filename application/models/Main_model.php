<?php

class Main_model extends CI_Model
{

    // Função responável pela inserção dos dados no bd.
    public function inserir_colaborador()
    {
        // O array a baixo pega todas as entradas do formulário
        $valores = [
            $this->input->post('categoria'),
            $this->input->post('nome'),
            $this->input->post('cpf'),
            $this->input->post('cnpj'),
            $this->input->post('razao'),
            $this->input->post('email'),
            $this->input->post('fone'),
            $this->input->post('login'),
            $this->input->post('senha'),
            $this->input->post('endereco'),
            $this->input->post('bairro'),
            $this->input->post('cidade'),
            $this->input->post('status'),
        ];

        // Query responsável por inserir os dados no bd
        $this->db->query('INSERT INTO colaborador (categoria, nome, cpf, cnpj, razao, email, fone, login, senha, endereco, bairro, cidade, status) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)', $valores);
    }

    // Pega os dados inseridos via post e...
    public function inserir_produto()
    {
        $valores = [
            $this->input->post('descricao'),
            $this->input->post('preco_unit'),
            $this->input->post('quantidd'),
            $this->input->post('outras_info'),
            $this->input->post('status'),
        ];

        // ... realiza o INSERT dentro da tabela produto
        $this->db->query('INSERT INTO produto (descricao, preco_unit, quantidd, outras_info, status) 
        VALUES (?,?,?,?,?)', $valores);
    }

    // Função que retorna a lista de todos os dados da tabela colaborador
    public function getAllColaborador()
    {
        $colaborador = $this->db->get('colaborador')->result();
        return $colaborador;
    }

    // Função que retorna a lista de todos os dados da tabela produto
    public function getAllProduto()
    {
        $produto = $this->db->get('produto')->result();
        return $produto;
    }

    // Obtem os produtos por id
    public function getColaborador($id_colaborador){
		return $this->db->where('id_colaborador',$id_colaborador)->get('colaborador')->row();
	}

    public function editarColaborador($id_colaborador,$data){
		$this->db->where('id_colaborador',$id_colaborador)->update('colaborador',$data);
	}

    // Obtem os produtos por id
    public function getProduto($id_produto){
		return $this->db->where('id_produto',$id_produto)->get('produto')->row();
	}

    // Método responsavel pelo update dos dados
    public function editarProduto($id_produto,$data){
		$this->db->where('id_produto',$id_produto)->update('produto',$data);
	}
}
