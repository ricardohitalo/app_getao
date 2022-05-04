<h3>Fornecedor</h3>

@php
    
    // if() {

    // } elseif {

    // } else {

    // }

@endphp

{{-- @dd($fornecedores) --}}
@isset($fornecedores)
    @foreach ($fornecedores as $index => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? ''}} {{ $fornecedor['telefone']}}
        <br>
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('86')
                Teresina - PI
                @break
            @case('99')
                Imperatriz - MA
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
    @endforeach
@endisset
