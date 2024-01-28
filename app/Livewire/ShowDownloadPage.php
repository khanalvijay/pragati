<?php

namespace App\Livewire;

use App\Models\Downloads;
use Livewire\Component;

class ShowDownloadPage extends Component
{

    public $downloaddetials;
    public function mount() 
     {
        $this->downloaddetials=Downloads::all();
     }
    public function render()
    {
        return view('livewire.show-download-page');
    }
}
