<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'active'];

    public function roles()
    {
        return $this->belongsToMany(CategoryOption::class, CategoryOptionMap::class);
    }
}
