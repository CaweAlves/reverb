<?php

namespace App\Livewire;

use Livewire\Component;

class CountReverb extends Component
{

    public int $count = 0;

    public function render()
    {
        return view('livewire.count-reverb');
    }

    public function getListeners()
    {
        return [
            "echo-private:testPrivateChannel,TestingReverbEvent" => 'add',
        ];
    }

    public function add()
    {
        $this->count++;
    }
}
