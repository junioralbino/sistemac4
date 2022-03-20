<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller; 


class Produtos extends Controller
{
    public function index()
    {
        $titulo = "Meus Produtos";

        $produtos = [
                [   
                    'nome' => 'Notebook dell',
                    'descricao' => 'notebook dell vostro 360',
                    'valor_de_compra' => 1299.9,
                    'valor_de_venda' => 2899.99,
                    'quantidade' => 20,
                    'validade' => ''
                ],
                [
                    'nome' => 'Notebook Acer dual core',
                    'descricao' => 'notebook acer dual core mini ',
                    'valor_de_compra' => 1599.9,
                    'valor_de_venda' => 299.99,
                    'quantidade' => 20,
                    'validade' => ''
                ] 
        ];

        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;

        echo view('produtos/index', $data);

    }

    public function model(){

        $produto_model = new ProdutoModel();

        //$produto = $produto_model->findAll(); trazendo a lista de produtos

        //$produto = $produto_model->where('id_produto', 1)->first(); pegando o produtos atraves do id
        
       /* $produto_model->insert([
            'nome' => 'Notebook i5 i5, 8gb ram',
            'descricao' => 'Notebook i5 i5, 8gb ram, 1tb, ssd, 15.6 polegadas, em estoque, sistema win10 de notebook executivo, computador portátil',
            'valor_de_compra' => 999.9 ,
            'valor_de_venda' =>  199.99,
            'quantidade' => 30,
            'validade' => ''
        ]); */ //inserido os dados na tabela produtos

        /*
        $dados = [
            'nome' => 'Notebook Sansung i5',
            'descricao' => 'Notebook i5 i5, 8gb ram, 1tb, ssd, 15.6 polegadas, em estoque, sistema win10 de notebook executivo, computador portátil',
            'valor_de_compra' => 1399.9 ,
            'valor_de_venda' =>  2499.99,
            'quantidade' => 15,
            'validade' => ''
        ]; 
        
        $produto = $produto_model->where('id_produto', 2)->set($dados)->update();
        */ // update pegando id produto 

        //$produto_model->where('id_produto', 2)->delete();
        


       // var_dump($produto);
    } 
}
