<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'last_name',
        'first_name',
        'subject_id',
        'isbn',
        'publisher',
    ];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
