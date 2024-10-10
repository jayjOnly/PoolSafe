<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elections extends Model
{
    protected $fillable = [
        'organization_id', 'title', 'description', 'start_date', 'end_date', 'status', 'type'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function ballots()
    {
        return $this->hasMany(Ballot::class);
    }
}