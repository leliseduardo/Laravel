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
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        </br>
        Status: {{ $fornecedores[$i]['status'] }}
        </br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não informado' }}
        </br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        </br>

        <hr>
    @endfor
@endisset



