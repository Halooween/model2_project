<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    protected $table='title';
    protected $timestamp=false;
    protected $fillable=[
        'title',
      
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
