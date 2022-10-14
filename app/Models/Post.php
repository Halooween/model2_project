<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='post';
    protected $timestamp=false;
    protected $fillable=[
        'position',
        'status',
        'description'
    ];

    public function title(){
        return $this->hasOne(Title::class, 'post_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function person(){
        return $this->belongsToMany(Person::class, 'post_id');
    }

    public function commentMedia()
    {
        return $this->hasOneThrough(
            MediaUser::class,
            Comment::class,
            'post_id', 
            'comment_id',
            'id', 
            'id' 
        );
    }
}
