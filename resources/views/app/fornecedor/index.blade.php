<h3>Fornecedor</h3>

@php
    
    // if() {

    // } elseif {

    // } else {

    // }

@endphp

{{-- @dd($fornecedores) --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{$fornecedores[0]['cnpj'] ?? ''}}
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
