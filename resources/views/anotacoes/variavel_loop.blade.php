@dd($loop)

@isset($variavel)
    @forelse($variavel as $indice => $var)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $var['nome'] }}
        <br>
        Status: {{ $var['status'] }}
        <br>
        CNPJ: {{ $var['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone: ({{ $var['ddd'] ?? '' }}) {{ $var['telefone'] ?? '' }}
        <br>

        @if ($loop->first)
            Primeira iteração do Loop
        @endif

        @if ($loop->last)
            Última iteração do Loop

            <br>

            Total de registros {{ $loop->count }}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
