<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetHistory extends Model
{
    public $timestamps = false; // Prevents the timestamp crash!

    protected $fillable = [
        'value',
        'date',
        'asset_id',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
