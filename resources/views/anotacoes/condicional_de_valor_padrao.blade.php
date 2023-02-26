@isset($variavel)
    Fornecedor: {{ $variavel[0]['nome'] }}
    <br>
    Status: {{ $variavel[0]['status'] }}
    <br>
    CNPJ: {{ $variavel[0]['cnpj'] ?? 'CNPJ não informado' }}
    <!--
        irá imprimir CNPJ não informado caso:
        $variavel testada não estiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->
@endisset
