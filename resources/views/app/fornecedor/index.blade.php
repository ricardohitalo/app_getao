<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse($fornecedores as $index => $fornecedor)
        Fornecedor: @{{ $fornecedor['nome'] }}
        <br>
        Status: @{{ $fornecedor['status'] }}
        <br>
        CNPJ: @{{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: @{{ $fornecedor['ddd'] ?? ''}} @{{ $fornecedor['telefone']}}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
