<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'codigo',
        'data_nasc',
        'sexo',
        'peso',
        'data_pesag',
        'observacoes',
];
    
        public function buscaPorData(string $darta_nasc = '') {
        return $this->where('nome', 'like', "%$darta_nasc%")->get();
    }
    
}
