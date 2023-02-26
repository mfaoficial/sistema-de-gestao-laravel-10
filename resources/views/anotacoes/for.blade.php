@isset($variavel)
    @for ($i = 0; isset($variavel[$i]); $i++)
        Fornecedor: {{ $variavel[$i]['nome'] }}
        <br>
        Status: {{ $variavel[$i]['status'] }}
        <br>
        CNPJ: {{ $variavel[$i]['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone: ({{ $variavel[$i]['ddd'] ?? '' }}) {{ $variavel[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
