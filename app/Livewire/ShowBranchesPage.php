<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Branches;

class ShowBranchesPage extends Component
{
    public $branchesdetials;
    public function mount() 
     {
        $this->branchesdetials=Branches::all();
        
    }
    public function render()
    {
        return view('livewire.show-branches-page');
    }
}
