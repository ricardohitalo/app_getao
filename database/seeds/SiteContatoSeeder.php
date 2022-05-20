<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Fulano de Tal';
        // $contato->telefone = '(99) 91234-5678';
        // $contato->email = 'flano@mail.com.br';
        // $contato->motivo_contato = 2;
        // $contato->mensagem = 'Fulano de Tal';
        // $contato->save();

        factory(SiteContato::class, 100)->create();
    }
}
