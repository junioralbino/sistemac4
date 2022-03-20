<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        $this->db->table('produtos')->insert([
            'nome' => 'Notebook dell',
            'descricao' => 'notebook dell vostro 360',
            'valor_de_compra' => 1299.9,
            'valor_de_venda' => 2899.99,
            'quantidade' => 20,
            'validade' => ''
        ]);
    }
}
