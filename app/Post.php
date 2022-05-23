<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'body',
        'cover',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
