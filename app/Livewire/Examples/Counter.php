<?php

declare(strict_types=1);

namespace App\Livewire\Examples;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Counter extends Component
{
    public int $count = 1;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    public function render(): View
    {
        return view('livewire.examples.counter');
    }
}
