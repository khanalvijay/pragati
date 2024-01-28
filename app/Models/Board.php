<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    const BOD_ROLES = [
        'Chairman' => 'Chairman',
        'Vice-Chairman' => 'Vice-Chairman',
        'Secretary' => 'Secretary',
        'Treasury' => 'Treasury',
        'Member' => 'Member',
    ];

    public $table = 'boarddirectors';
    use HasFactory;
    protected $fillable=['name','position','photo'];
}
