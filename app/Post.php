<?php

namespace App;

class Post extends Model
{
    public function comments() {

        return $this->hasMany(Comment::class);
        
    }

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function addComment($array) {

        $this->comments()->create([
            'body' => $array['body'],
            'user_id' => $array['user_id']
        ]);

        // dd($array);

    }

}
