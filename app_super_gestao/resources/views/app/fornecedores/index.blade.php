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


@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
</br>
Status: {{ $fornecedores[0]['status'] }}
</br>
CNPJ: {{ $fornecedores[0]['cnpj'] }}
</br>
@empty($fornecedores[0]['cnpj'])
  <h3> Vazio </h3>
@endempty 
Fornecedor: {{ $fornecedores[1]['nome'] }}
</br>
Status: {{ $fornecedores[1]['status'] }}
</br>
@isset( $fornecedores[1]['cnpj'])
CNPJ: {{ $fornecedores[1]['cnpj'] }}
@endisset

@endisset



