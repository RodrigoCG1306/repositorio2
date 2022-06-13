<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function increment()
    {
        if($this->count<10)
        {
            $this->count++;
        }
    }

    public function decrement()
    {
       /* if($this->count == 0)
        {
            $this->count - 0;
        }
        else
        {
            $this->count--;
        }*/
        
        if($this->count > 0){
            $this->count--;
        }

    }
    

    public function render()
    {
        return view('livewire.counter');
    }
}
