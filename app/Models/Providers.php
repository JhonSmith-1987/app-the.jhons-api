<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function credits()
    {
        return $this->hasMany(Credits::class);
    }

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }
}
