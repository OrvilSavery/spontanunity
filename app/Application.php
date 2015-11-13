<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = ['user_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5'];
}
