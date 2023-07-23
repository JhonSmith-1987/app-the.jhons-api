<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'detail',
        'value_loan',
        'percentage',
        'total_loan',
        'payment',
        'provider_id',
        'user_id'];

    public function provider()
    {
        return $this->belongsTo(Providers::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
