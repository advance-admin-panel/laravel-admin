<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class Role extends Model
{
    const ADMIN_ID = 1;
    
    protected $fillable = ['name', 'active', 'slug'];
}
