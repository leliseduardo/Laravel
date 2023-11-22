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
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        </br>
        Status: {{ $fornecedor['status'] }}
        </br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
        </br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        </br>
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset



