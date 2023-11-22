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
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Não informado' }}
    </br>
    Telefone: {{ $fornecedores[0]['ddd'] ?? '' }} {{ $fornecedores[0]['telefone'] ?? '' }}
    </br>
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break;
        @case('85')
            Fortaleza - CE
            @break
        @default
            Cidade não reconhecida
    @endswitch
@endisset



