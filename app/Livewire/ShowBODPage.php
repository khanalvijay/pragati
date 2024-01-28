<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Component;

class ShowBODPage extends Component
{
    public $boddetials;
    public function mount() 
     {
        $this->boddetials=Board::all();
        
    }
    public function render()
    {
        
        return view('livewire.show-b-o-d-page');
    
    }
}
