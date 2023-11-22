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

Fornecedor: {{ $fornecedores[0]['nome'] }}
</br>
Status: {{ $fornecedores[0]['status'] }}

@if( !($fornecedores[0]['status'] == 'S'))
    <h3> Fornecedor inativo </h3>
@endif

@unless($fornecedores[0]['status'] == "S")
    <h3> Fornecedor inativo </h3>
@endunless




