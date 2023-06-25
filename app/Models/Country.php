<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class Country extends Model
{
    protected $fillable = ['country_name', 'active'];
}
