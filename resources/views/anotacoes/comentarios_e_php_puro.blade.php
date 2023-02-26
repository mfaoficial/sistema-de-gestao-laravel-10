{{ 'Texto de teste' }}
<?= 'Texto de teste' ?>

{{-- Fica o comentário que será descartado pelo interpretador blade --}}

{{-- bloco de PHP puro --}}
@php
    // Comentário de uma linha
    /*
     * Comentário de múltiplas linhas
     */

    echo 'Texto de teste';
@endphp
