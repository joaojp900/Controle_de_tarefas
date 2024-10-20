<?php

namespace App\Mail;

use App\Models\tarefa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovaTarefaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $tarefa;
    public $data_limite_conclusão;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(tarefa $tarefa)
    {
        $this->tarefa = $tarefa->tarefa;
        $this->data_limite_conclusão = date('d/m/y',strtotime($tarefa->data_limite_conclusão));
        $this->url = 'http://localhost:8000/tarefa/'.$tarefa->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.nova-tarefa')->subject('Nova Tarefa Criada');
    }
}
