@isset($variavel)
    @foreach($variavel as $indice => $var)
        Fornecedor: {{ $var['nome'] }}
        {{-- Forma de modificar um atributo dentro de um foreach --}}
        @php $variavel[$indice]['nome'] = 'Outro nome para o fornecedor' @endphp
        <br>
        Status: {{ $var['status'] }}
        <br>
        CNPJ: {{ $var['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        Telefone: ({{ $var['ddd'] ?? '' }}) {{ $var['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset
