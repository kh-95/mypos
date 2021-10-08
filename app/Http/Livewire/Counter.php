<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
public $count=0;


public function increment(){


    $this->count++;
}

public $name='khadija';
public $loud=false;
public $greeting=['hello'];
    public function render()
    {
        return view('livewire.counter');
    }
    public function resetname($name='chico'){

        $this->name= $name;
    }
}
