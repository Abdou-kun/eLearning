<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Salon extends Model
{
    use HasFactory;

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function users()
    {
       return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function member()
    {
      return $this->belongsToMany(User::class)->wherePivot('user_id',Auth::user()->id);
    }
    
}
