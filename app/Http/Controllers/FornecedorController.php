<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd'=> '11',
                'telefone' => '00000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '',
                'ddd'=> '86',
                'telefone' => '00000-0000',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '11.111.111/1111-11',
                'ddd'=> '99',
                'telefone' => '00000-0000',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => '11.111.111/1111-11',
                'ddd'=> '89',
                'telefone' => '00000-0000',
            ],
        ];
        // $fornecedores = [];

        // echo $fornecedores[0]['cnpj'] ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
