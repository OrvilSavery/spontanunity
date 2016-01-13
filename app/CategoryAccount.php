<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAccount extends Model
{
    protected $table = 'category_account';
    protected $fillable = ['category_id', 'user_id'];
    public static $rules = [
        'category_id' => 'required',
        'user_id'     => 'required'
    ];
}
