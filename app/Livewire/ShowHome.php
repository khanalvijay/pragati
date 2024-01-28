<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sliders;

class ShowHome extends Component
{

  public $sliderdetials;
  public function mount()
  {
    $this->sliderdetials=Sliders::all();
  }

    public function render()
    {
      
        return view('livewire.show-home');
    }
}
