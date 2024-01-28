<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class ShowContactPage extends Component
{

    public $settingdetials;
    public function mount()
    {
      $this->settingdetials=Setting::all();

    }

    public function render()
    {

        return view('livewire.show-contact-page');
    }
}
