<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complement extends Model
{
    use HasFactory;

    protected $fillable = [
        'denunciation_id',
        'type',
        'content',
        'title',
        'file_name',
        'status'
    ];

    public function scopeByDenunciation($query, $denunciation_id)
    {
        return $query->where('denunciation_id', $denunciation_id);
    }

    // public static function getNotViewComplements($complement_id) {
    //     $number = Complement::where('status')
    // }
}
