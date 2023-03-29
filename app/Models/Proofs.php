<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proofs extends Model
{
    use HasFactory;

    protected $fillable = [
        'denunciation_id',
        'file_name',
        'status',
    ];

    public function scopeByDenunciation($query, $denunciation_id)
    {
        return $query->where('denunciation_id', $denunciation_id);
    }

}
