<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnimalCategory extends Model
{
    use HasFactory;
    
    protected $table = 'animal_categories';
    protected $fillable = ['title'];
}
