<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'position',
        'salary',
        'candidate_id'
    ];

    public function candidate(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }
}
