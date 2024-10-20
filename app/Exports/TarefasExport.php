<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         
        return auth()->user()->tarefas()->get();

        //dd(auth()->user()->tarefas()->get());
    }

    public function headings(): array{ //Declarando o tipo de retorno
        
        //Colocar os titulos nos arquivos
    return [

     'ID da Tarefa',
     'Tarefa',
     'Data limite conclusão',
     

    ];

    }

    public function map($linha): array //Objetivo do metodo Map e trazer oq vc quer linha a linha
    {
        
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/y', strtotime( $linha->data_limite_conclusao)),
        ];
    }


 
}
