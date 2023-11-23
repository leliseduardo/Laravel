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

        {{-- @dd($loop) --}}

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        </br>
        Status: {{ $fornecedor['status'] }}
        </br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
        </br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        </br>
        @if($loop->first)
            Esta é a primeira iteração
        @endif
        @if($loop->last)
            Esta é a última iteração
            <br>
            Número de iterações: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset



