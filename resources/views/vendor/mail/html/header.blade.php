<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="/img/logo.png" class="logo" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
