@php

@endphp

@isset($variavel)
    Fornecedor: {{ $variavel[0]['nome'] }}
    <br>
    Status: {{ $variavel[0]['status'] }}
    <br>
    CNPJ: {{ $variavel[0]['cnpj'] ?? 'CNPJ não informado' }}
    <br>
    Telefone: ({{ $variavel[0]['ddd'] ?? '' }}) {{ $variavel[0]['telefone'] ?? '' }}
    @switch($variavel[0]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('85')
            Fortaleza - CE
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @default
            Estado não identificado
    @endswitch
@endisset
