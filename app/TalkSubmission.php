<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalkSubmission extends Model
{
    protected $fillable = ['name', 'email', 'title', 'abstract', 'given', 'presenter', 'date_given', 'video_url', 'notes'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
