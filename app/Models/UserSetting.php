<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'search_age_from',
        'search_age_to',
        'search_male',
        'search_female'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
