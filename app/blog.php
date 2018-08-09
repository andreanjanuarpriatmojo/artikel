<?php

namespace App;

use App\Observers\UserObserver;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    /*public function boot()
    {
        User::observe(BlogObserver::class);
    }*/
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    
}
