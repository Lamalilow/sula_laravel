<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
    public function info()
    {
        return $this->hasOne('App\Models\UserInfo');
    }
    public function settings()
    {
        return $this->hasOne('App\Models\UserSetting');
    }
    public function userLiked()
    {
        return $this->belongsToMany('App\Models\User', 'results', 'user_two', 'user_one');
    }

    public function likedUser()
    {
        return $this->belongsToMany('App\Models\User', 'results', 'user_one', 'user_two');
    }
    public function result(User $foreignUser)
    {
        $thisResulted = $this->belongsToMany('App\Models\User', 'results',
            'user_one', 'user_two')
            ->where('user_one', '=', $this->id)
            ->where('user_two', '=', $foreignUser->id)->getResults();

        $resultedThis = $this->belongsToMany('App\Models\User', 'results',
            'user_two', 'user_one')
            ->where('user_two', '=', $this->id)
            ->where('user_one', '=', $foreignUser->id)->getResults();

        if (isset($thisResulted[0]->attributes['id']) && isset($resultedThis[0]->attributes['id'])) {
            return $foreignUser;
        } else {
            return null;
        }
    }

    public function dislikes()
    {
        return $this->belongsToMany('App\Models\User', 'dislikes', 'user_two', 'user_one');
    }


    public function scopeSearchWithSettings($query, $from, $to, $gender, $id)
    {
        if ($gender == 'both') {
            return $query->whereHas('info', function ($query) use ($from, $to, $id) {
                $query->where('age', '>=', $from)
                    ->where('age', '<=', $to)
                    ->where('user_id', '!=', $id)
                    ->where('photo', '!=', '');
            });
        } else {
            return $query->whereHas('info', function ($query) use ($from, $to, $gender, $id) {
                $query->where('age', '>=', $from)
                    ->where('age', '<=', $to)
                    ->where('gender', $gender)
                    ->where('user_id', '!=', $id)
                    ->where('photo', '!=', '');
            });
        }
    }

    public function scopeSearchWithoutLikesAndDislikes($query, $id)
    {
        return $query->whereDoesntHave('userLiked', function ($query) use ($id) {
            $query->where('user_one', $id);
        })
            ->whereDoesntHave('dislikes', function ($query) use ($id) {
                $query->where('user_one', $id);
            });
    }
    public function scopeSearchResults($query, $id)
    {
        return $query->whereHas('userLiked', function ($query) use ($id) {
            $query->where('user_one', $id);
        })
            ->whereHas('likedUser', function ($query) use ($id) {
                $query->where('user_two', $id);
            })
            ->whereDoesntHave('dislikes', function ($query) use ($id) {
                $query->where('user_one', $id);
            });
    }

    public function scopeSearchLikes($query, $id)
    {
        return $query->whereHas('userLiked', function ($query) use ($id) {
            $query->where('user_one', $id);
        })
            ->whereDoesntHave('likedUser', function ($query) use ($id) {
                $query->where('user_two', $id);
            })
            ->whereDoesntHave('dislikes', function ($query) use ($id) {
                $query->where('user_one', $id);
            });
    }
}
