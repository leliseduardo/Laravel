<h3>Fornecedores</h3>

{{-- Comentário que será desconsiderado pelo interpretador do blade --}}

{{ 'Texto teste' }}
<br />
<?= 'Texto teste' ?>
<br />

@php
  // Comentários de uma linha

  /*
    Comentários de mais de uma linha
  */

  echo 'Texto teste'
@endphp