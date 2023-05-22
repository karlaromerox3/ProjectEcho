<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'questions';

    public const FACTORS = ['Membership', 'Acceptance+', 'Acceptance-', 'Trust'];
    public const QUESTIONAIRES = ['SB', 'SE'];
    public const AGREEMENT7 = [
        'No estoy absolutamente de acuerdo',
        'No estoy de acuerdo',
        'Algo en desacuerdo',
        'Neutral',
        'Un poco de acuerdo',
        'De acuerdo',
        'Estoy muy de acuerdo'
    ];

    public const SEGURIDAD5 = [
        'Muy inseguro/a',
        'Inseguro/a',
        'Neutral',
        'Seguro/a',
        'Muy seguro/a'
    ];

    public const FRECUENCIA5 = [
        'Nunca',
        'Rara vez',
        'A veces',
        'Frecuentemente',
        'Siempre'
    ];

    protected $fillable = [
        'questionaire',
        'factor',
        'question',
        'options_type'
    ];
}
