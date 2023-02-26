@isset($variavel)
@php $i = 0 @endphp
    @while(isset($variavel[$i]))
        Fornecedor: {{ $variavel[$i]['nome'] }}
        <br>
        Status: {{ $variavel[$i]['status'] }}
        <br>
        CNPJ: {{ $variavel[$i]['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone: ({{ $variavel[$i]['ddd'] ?? '' }}) {{ $variavel[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
