<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalCategory extends Model
{
    protected $table = 'animal_categories';
    protected $fillable = ['title'];
}
