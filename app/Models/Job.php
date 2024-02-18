<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Entreprise;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'entreprise_id',
        'titre',
        'description',
        'compétences_requises',
        'type_contrat',
        'emplacement',
    ];


    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
}
