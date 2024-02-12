<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titre',
        'poste_actuel',
        'industrie',
        'adresse',
        'telephone',
        'autre_contact',
        'cv',
        'a_propos'
    ];
}
