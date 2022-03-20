<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Clientes extends Seeder
{
    public function run()
    {
        $this->db->table('clientes')->insert([
            'nome' => 'Juliano perreira silva',
            'data_de_nascimento' => '12/09/1985',
            'CPF' => 88888888888,
            'telefone' => 35988592935,
            'endereco' => 'Rua carlos gomes da silva 1498',
            'limite_de_credito' => 20000,
            'dia_de_pagamento' => '10/03/2022'
        ]);
    }
}
