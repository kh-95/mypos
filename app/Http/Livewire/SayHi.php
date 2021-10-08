<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{

    public $name;
public function mount($name){

$this->name=$name;

}
    public function render()
    {
        return view('livewire.say-hi');
    }
}
