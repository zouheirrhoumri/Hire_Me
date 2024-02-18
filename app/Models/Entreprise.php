<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Job;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom' ,
       'slogan',
       'industrie',
       'description',
       'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobOffers()
    {
        return $this->hasMany(Job::class);
    }
}
