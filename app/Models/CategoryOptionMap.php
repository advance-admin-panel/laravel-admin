<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class CategoryOptionMap extends Model
{
    protected $fillable = ['category_id', 'category_option_id'];
}
