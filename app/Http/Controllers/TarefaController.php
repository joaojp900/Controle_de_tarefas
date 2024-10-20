<?php

namespace App\Http\Controllers;

use App\Exports\TarefasExport;
use App\Mail\NovaTarefaMail;
use App\Models\tarefa;
use Barryvdh\DomPDF\PDF;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
 

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     { //Colocado para n passar direto, passar pelo rota de login
        $this->middleware('auth');
     }

    public function index()
    {
        $user_id = auth()->user()->id;

        $tarefas = tarefa::where('user_id', $user_id)->paginate(5);
        return View('tarefa.index',['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['user_id'] = auth()->user()->id;

     

        $tarefa =  tarefa::create($dados);
        $destinatario= auth()->user()->email; //email do usuario logado (autenticado)
        Mail::to($destinatario)->send(new NovaTarefaMail($tarefa));
        return redirect()->route('tarefa.show', ['tarefa' => $tarefa->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(tarefa $tarefa)
    {
        return View('tarefa.show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(tarefa $tarefa)
    {
        $user_id = auth()->user()->id;

        if($tarefa->user_id == $user_id){
        return View('tarefa.edit', ['tarefa' => $tarefa]);
        }
        return view('acesso-negado');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarefa $tarefa)
    {
        if ($tarefa->user_id == auth()->user()->id){

            $tarefa->update($request->all());
            return redirect()->route('tarefa.show',['tarefa' => $tarefa->id]);
          }
          return View('acesso-negado');
         
        
}      

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarefa $tarefa)
    {
         if(!$tarefa->user_id == auth()->user()->id){ //Melhorar a proteção do codigo
            return view('acesso-negado');
        }
           $tarefa->delete();
          return redirect()->route('tarefa.index');
    } 


    public function exportacao($extensao){
         
        if(in_array($extensao, ['xlsx', 'csv', 'pdf'])){
        
            return Excel::download(new TarefasExport, 'lista_de_tarefas.'.$extensao );
        }
        return redirect()->route('tarefa');
    }

    public function exportar(){

        $tarefas = auth()->user()->tarefas()->get();

        $dados = ['tarefas' => $tarefas];

        // Cria uma nova instância de PDF
        $pdf = app()->make(PDF::class);
    
        // Carregar a view e os dados para gerar o PDF
        $pdf = $pdf->loadView('tarefa.pdf', $dados);
    
        // Fazer o download do PDF
        //return $pdf->download('lista_de_tarefas.pdf');
        return $pdf->stream('lista_de_tarefas.pdf');
         
    }

}
