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
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        </br>
        Status: {{ $fornecedores[$i]['status'] }}
        </br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não informado' }}
        </br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        </br>
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset



