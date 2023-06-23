<?php

namespace App\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait BuildQuieres
{
    public function scopeInactive(Builder $query)
    {
        $query->where('active', '=', 0);
    }

    public function scopeactive(Builder $query)
    {
        $query->where('active', '=', 1);
    }
}
