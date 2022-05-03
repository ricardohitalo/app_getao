<h4>Fornecedor</h4>

@php
    
    // if() {

    // } elseif {

    // } else {

    // }

@endphp

@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fonrnecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não exitem fornecedores cadastrados</h3>
@endif
