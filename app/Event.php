<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['type', 'name', 'description'];
    public static $rules = [
        'type' => 'required',
        'name' => 'required',
        'description' => 'required'
    ];
}
