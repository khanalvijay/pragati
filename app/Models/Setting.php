<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=['address','phone','email','map','fb_url','tw_url','in_url','logo','anniversarylogo'];
}
