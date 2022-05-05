<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse($fornecedores as $index => $fornecedor)
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] }}
        <br>
        @if ($loop->first)
            <br>
            Primeira interação do loop
            <br>
            Total de registros: {{ $loop->count }}      
        @endif

        @if ($loop->last)
            <br>
            Ultima interação do loo
            <br>
            Total de registros: {{ $loop->count }}       
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
