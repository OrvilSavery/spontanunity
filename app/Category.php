<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'archive', 'draft', 'active'];
    public static $rules = [
        'name' => 'required'
    ];
}
