<h3>Fornecedor</h3>

@php
    
    // if() {

    // } elseif {

    // } else {

    // }

@endphp

{{-- @dd($fornecedores) --}}
@isset($fornecedores)
    @for ($i = 0; $i < 3; $i++)    
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? ''}}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? ''}} {{ $fornecedores[$i]['telefone']}}
        <br>
        @switch($fornecedores[$i]['ddd'])
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
        <br> <br>
    @endfor
    {{-- @isset ($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
            @empty($fornecedores[0]['cnpj'])
              - Vazio  
            @endempty
    @endisset --}}

    {{-- @if($fornecedores[0]['status'] == 'N')
            <h3>Fornecedor Inativo</h3>
    @endif

    @unless ($fornecedores[0]['status'] == 'S')
            Fornecedor Inativo 
    @endunless --}}
@endisset
{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fonrnecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não exitem fornecedores cadastrados</h3>
@endif --}}
