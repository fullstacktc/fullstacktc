<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalkSubmissions extends Model
{
    protected $fillable = ['name', 'email', 'title', 'abstract', 'given', 'presenter', 'date_given'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
