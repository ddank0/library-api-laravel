<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenderBook extends Model
{
    use HasFactory;
    protected $table = 'gender_book';
    protected $fillable = [
        'id',
        'id_book',
        'id_gender'
    ];

}
