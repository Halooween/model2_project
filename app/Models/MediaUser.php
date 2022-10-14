<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaUser extends Model
{
    use HasFactory;
    protected $table='media_user';
    protected $timestamp=false;
    protected $fillable=[
        'username'
        
    ];

   
}
