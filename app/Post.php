<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return  '/posts/' . $this->created_at->format('Y-m-d') . '/' . $this->slug;
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($date)
	{
	    return Carbon::parse($date)->format('Y-m-d');
	}
}
