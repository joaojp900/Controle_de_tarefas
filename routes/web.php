<?php

use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

 

Auth::routes(['verify' => true ]);

Route::get('tarefa/exportacao/{extensao}', [\App\Http\Controllers\TarefaController::class, 'exportacao'])
->name('tarefa.exportacao');


Route::get('tarefa/exportar', [\App\Http\Controllers\TarefaController::class, 'exportar'])
->name('tarefa.exportar');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('verified');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('verified');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');
Route::get('mensagem-teste',function(){
    return new MensagemTesteMail();
   // Mail::to('joaojpwa@gmail.com')->send(new MensagemTesteMail());
    //return 'E-MAIL enviado com sucesso';
});