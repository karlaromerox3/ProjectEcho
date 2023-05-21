<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';

    public const MODELS = ['Tec 20', 'Tec 21'];
    public const GENDERS = ['Mujer', 'Hombre', 'Otro'];
    public const GRADUATION_TIMES = ['Junio 2023', 'Diciembre 2023', 'Junio 2024'];

    protected $fillable = [
        'model',
        'age',
        'gender',
        'graduation'
    ];
}
