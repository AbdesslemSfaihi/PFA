<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'startH',
        'duration',
        'session_id'
    ];

    public function sessions()
    {
        return $this->belongsTo(Session::class);
    }
}
