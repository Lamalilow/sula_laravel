<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_one',
        'user_two'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_one');
    }
}
