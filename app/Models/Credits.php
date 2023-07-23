<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'detail', 'value', 'provider_id', 'user_id'];

    public function provider()
    {
        return $this->belongsTo(Providers::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
