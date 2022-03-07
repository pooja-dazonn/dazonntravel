<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class populartour extends Model
{
    use HasFactory;
    protected $table = 'populartours';
    protected $fillable = [
        'Packagename',
         'Packagerate',
         'Packagedays',
         'Packageitenery',
         
     ];
}
