<?php

namespace App;

use Carbon\Carbon;

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

    public function scopeFilter($query, $filters) {

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }

    }

}
