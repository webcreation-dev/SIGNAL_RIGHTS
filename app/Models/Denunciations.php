<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denunciations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
        'place',
        'date',
        'description',
        'secret_code',
        'file_name',
        'status',
        'level',
        'notif_status',
        'place_personal',
        'email',
        'phone',
        'first_name',
        'last_name',
        'accord',
        'observations',
        'person_type',
        'sexe',
    ];

    public function scopeByUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public static function getNumberDenunciations($status)
    {
        return self::where('status', $status)->count();
    }

    public static function getNameStatus($status) {
        switch ($status) {
            case 'sent':
                return 'ENVOYE';
            case 'viewed':
                return 'VU';
            case 'seen':
                return 'LU';
            case 'review':
                return 'EN REVISION';
            case 'processing':
                return 'EN COURS';
            case 'solved':
                return 'RESOLU';
            case 'closed':
                return 'FERME';
            case 'cancel':
                return 'ANNULE';
            default:
                return 'EN REVISION';
        }
    }

    public static function getNameLevel($level) {
        switch ($level) {
            case 'important':
                return 'IMPORTANT';
            case 'not-important':
                return 'PAS TRES IMPORTANT';
            case 'very-':
                return 'TRES IMPORTANT';
            default:
                return 'IMPORTANT';
        }
    }

    public static function getColorStatus($status) {
        switch ($status) {
            case 'sent':
                return 'btn-info';
            case 'viewed':
                return 'btn-primary';
            case 'seen':
                return 'btn-success';
            case 'review':
                return 'btn-info';
            case 'processing':
                return 'btn-warning';
            case 'solved':
                return 'btn-success';
            case 'closed':
                return 'btn-secondary';
            case 'cancel':
                return 'btn-danger';

            default:
                return 'EN ATTENTE';
        }
    }

    public static function getColorLevel($level) {
        switch ($level) {
            case 'important':
                return 'btn-primary';
            case 'not-important':
                return 'btn-success';
            case 'very-':
                return 'btn-secondary';
            default:
                return 'btn-primary';
        }
    }


}
