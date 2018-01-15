<?php

namespace App;


class Comment extends Model
{
    public function task(){
        return $this->belongsToMany(Task::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
