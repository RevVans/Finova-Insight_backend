<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestmentHistory extends Model
{
    public $timestamps = false; // Prevents the timestamp crash!

    protected $fillable = [
        'value',
        'date',
        'investment_id',
    ];

    public function investment()
    {
        return $this->belongsTo(Investment::class);
    }
}
