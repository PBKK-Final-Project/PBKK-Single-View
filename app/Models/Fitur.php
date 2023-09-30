<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fitur extends Model
{
    use HasFactory;

    protected $table = 'fiturs';

    protected $fillable = [
        'nama_fitur',
    ];

    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class, 'plans_fiturs', 'fitur_id', 'plan_id');
    }
}