<h2>Fornecedores</h2>

@php
  /*
    if(){

    }
    elseif(){

    }
    else{

    }
  */
@endphp

{{-- @dd($fornecedores) // Imprime um array no navegador --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores </h3>
@elseif(count($fornecedores) >= 10)
    <h3> Existem vários fornecedores </h3>
@else
    <h3> Não existe nenhum fornecedor </h3>
@endif