<h3>Fornecedores</h3>

{{-- @php
    
    // if() {

    // } elseif {

    // } else {

    // }

@endphp --}}

{{-- @dd($fornecedores) --}}
@isset($fornecedores)
    @php $i = 0 @endphp
    @while (isset($fornecedores[$i]))
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
        @php $i++ @endphp
        <hr>
    @endwhile
@endisset
