<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $casts = [
        'items' => 'array',
        'date' => 'datetime'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }

}
