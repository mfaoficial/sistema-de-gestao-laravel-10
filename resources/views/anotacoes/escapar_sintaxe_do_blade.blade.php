{{-- Utiliza-se o @ antes da sintaxe php para imprimir literalmente tudo e não interpretar com o PHP --}}
@isset($variavel)
    @forelse($variavel as $indice => $var)
        Fornecedor: @{{ $var['nome'] }}
        <br>
        Status: @{{ $var['status'] }}
        <br>
        CNPJ: @{{ $var['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone: (@{{ $var['ddd'] ?? '' }}) @{{ $var['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
