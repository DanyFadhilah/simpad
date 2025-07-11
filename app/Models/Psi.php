<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psi extends Model
{
    protected $table = 'psi';

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
