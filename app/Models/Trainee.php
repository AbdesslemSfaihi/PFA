<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthdate',
        'email',
        'password',
        'phone',
        'image'
    ];

    public function sessions()
    {
        return $this->belongsToMany(Session::class, 'session_trainee', 'session_id', 'trainee_id');
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'seance_trainee', 'seance_id', 'trainee_id');
    }
}
