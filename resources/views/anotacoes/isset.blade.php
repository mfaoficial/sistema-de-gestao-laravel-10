@php
    /*
        if(isset($variavel)) {} // retornar true se a variável estiver definida
    */
@endphp

@isset($variavel)
    Variavel: {{ $variavel }}
@endisset
