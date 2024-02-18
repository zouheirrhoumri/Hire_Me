<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
    ];

    public function cursuses()
    {
        return $this->hasMany(cursuse::class);
    }

    public function languages()
    {
        return $this->hasMany(language::class);
    }

    public function experiences()
    {
        return $this->hasMany(experience::class);
    }

    public function competences()
    {
        return $this->hasMany(competence::class);
    }
}
