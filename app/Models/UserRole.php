<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class UserRole extends Model
{
    protected $fillable = ['role_id', 'user_id'];
}
