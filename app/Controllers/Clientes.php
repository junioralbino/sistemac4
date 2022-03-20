<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ClienteModel; 

class Clientes extends Controller
{
    public function index()
    {
        $clientes_model = new ClienteModel();

        $clientes = $clientes_model->findAll();

        $data['clientes'] = $clientes;
        
       echo view('clientes/index', $data);
    }
}