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

    public function scopeActive($query)
    {
        return $query->where('archive', 0)->where('draft', 0)->where('active', 1);
    }
}
