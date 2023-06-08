<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOptionMap extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'category_option_id'];
}
