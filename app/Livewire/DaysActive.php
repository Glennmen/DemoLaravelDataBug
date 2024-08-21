<?php

namespace App\Livewire;

use App\Data\DemoData;
use Livewire\Component;

class DaysActive extends Component
{
    public DemoData $demoData;

    public function mount()
    {
        $this->demoData = DemoData::from(["days_active" => ["monday", "thursday"]]);
    }

    public function render()
    {
        return view('livewire.days-active');
    }
}
