<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wp extends Model
{
    protected $table = 'wp';

    protected $fillable = [
        'user_id',
        'name',
        'jabatan',
        'nip',
        'nohp',
        'disabled',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hasGroupsUsers()
    {
        return $this->hasMany(HasGroupsUser::class, 'wp_id');
    }
}
