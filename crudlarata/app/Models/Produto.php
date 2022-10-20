<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\PaginationServiceProvider;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'nome',
 'marca',
 'quantidade',
 'preco',
 'data_vencimento'
        
        
        
    ];
    
    
}
