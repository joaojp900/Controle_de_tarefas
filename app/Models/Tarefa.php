<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected  $fillable = ['tarefa', 'data_limite_conclusão','user_id'];
    use HasFactory;

    public function user(){
        //BelongsTo (Pertence a 1)
        return $this->belongsTo('App\Models\User');
    }


}
