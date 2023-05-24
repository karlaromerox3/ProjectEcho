<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

        protected $table = 'answers';


    public function students(){
        return $this->belongsToMany(Student::class);
    }
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
