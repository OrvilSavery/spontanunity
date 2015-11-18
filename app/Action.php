<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';
    protected $fillable = ['user_id', 'event_id'];
    public static $rules = [
        'user_id' => 'required',
        'event_id' => 'required'
    ];
}
