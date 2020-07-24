<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeUsers($query) {
        return $query->where('name', '!=', 'dev');
    }

    public function person() {
        return $this->belongsTo('App\Models\Person');
    }

    public function seller_user() {
        return $this->hasOne('App\Models\Invoice');
    }
}
