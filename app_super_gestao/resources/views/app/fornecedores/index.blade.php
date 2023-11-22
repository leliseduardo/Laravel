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
    @php $i = 0 @endphp
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        </br>
        Status: {{ $fornecedor['status'] }}
        </br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
        </br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        </br>
        <hr>
        @php $i++ @endphp
    @endforeach
@endisset



