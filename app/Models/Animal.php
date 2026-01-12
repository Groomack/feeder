<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\AnimalCategory;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animals';
    protected $fillable = [
        'name',
        'category_id',
        'user_id',
        'img_path'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(AnimalCategory::class);
    }
}
