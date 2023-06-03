<?php

namespace App\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait BuildsQueries
{
    public function scopewithInactive(Builder $query)
    {
        $query->where('active', '=', 0);
    }
}