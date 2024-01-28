<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    const BOD_ROLES = [
        'Accounts Supervision Committee Coordinator' => 'Accounts Supervision Committee Coordinator',
        
        'Member' => 'Member',
    ];
    public $table='boardaccount';
    
    use HasFactory;
    protected $fillable=['name','position','photo'];
}
