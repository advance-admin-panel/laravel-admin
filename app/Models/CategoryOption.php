<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class CategoryOption extends Model
{
    protected $fillable = ['category_option_name', 'active'];
}
