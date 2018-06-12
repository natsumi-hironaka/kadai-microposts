<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favoriteds()
    {
        return $this->belongsToMany(Micropost::class, 'favorited_posts', 'posts_id', 'user_id')->withTimestamps();
}
}