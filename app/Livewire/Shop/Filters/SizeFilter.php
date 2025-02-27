<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Size;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class SizeFilter extends Filter
{
    use WithMultipleFilter;
    use WithModelsFilter;

    public string $title = 'Tamaños';

    protected string $eloquentModel = Size::class;
}
