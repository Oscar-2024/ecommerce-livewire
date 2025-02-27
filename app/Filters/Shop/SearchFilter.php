<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

final class SearchFilter extends Filter
{
    public function handle(Builder $items, \Closure $next): Builder
    {
        if (! $this->filter) {
            return $next($items);
        }

        $items
            ->where(column: 'name', operator: 'like', value: "%{$this->filter}%");

        return $next($items);
    }
}
