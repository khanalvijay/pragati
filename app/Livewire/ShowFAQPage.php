<?php

namespace App\Livewire;

use App\Models\FAQ;
use Livewire\Component;

class ShowFAQPage extends Component
{
    public $faqdetials;
    public function mount() 
     {
        $this->faqdetials=FAQ::all();
     }
    public function render()
    {
        return view('livewire.show-f-a-q-page');
    }
}
