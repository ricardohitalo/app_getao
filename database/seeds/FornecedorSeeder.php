<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando Objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor Seed';
        $fornecedor->site = 'fornecedorseed.com.br';
        $fornecedor->uf = 'MA';
        $fornecedor->email = 'fornecedorseed@mail.com.br';
        $fornecedor->save();

        // Metodo create usando fillable da classe fornecedor
        Fornecedor::create([
            'nome' => 'Fornecedor Array',
            'site' => 'fornecedorarray.com.br',
            'uf' => 'MA',
            'email' => 'fornecedorarray@mail.com.br',
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor Insert',
            'site' => 'fornecedorinsert.com.br',
            'uf' => 'MA',
            'email' => 'fornecedorinsert@mail.com.br',
        ]);
    }
}
