@php
    /*
        if(empty($variavel)) {} // retornar true se a variável estiver vazia
        valores que são considerados vazios
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var
    */
@endphp

@isset($variavel)
    Fornecedor: {{ $variavel[0]['nome'] }}
    <br>
    Status: {{ $variavel[0]['status'] }}
    <br>
    @isset($variavel[0]['cnpj'])
        CNPJ: {{ $variavel[0]['cnpj'] }}
        @empty($variavel[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset
