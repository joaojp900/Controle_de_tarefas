@component('mail::message')
# {{$tarefa}}

 Data Limite de conclusão: {{$data_limite_conclusão}}

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
