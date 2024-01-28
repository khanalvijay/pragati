<?php

namespace App\Livewire;

use App\Models\Account;
use Livewire\Component;

class ShowAccountSCPage extends Component
{
    public $bodaccounts;
    public function mount() 
     {
        $this->bodaccounts=Account::all();
        
    }
    public function render()
    {
        
        return view('livewire.show-account-s-c-page');
    }
}
