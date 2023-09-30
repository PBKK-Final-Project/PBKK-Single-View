<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = [
        'harga',
        'diskon',
        'durasi',
    ];

    public function fiturs(): BelongsToMany
    {
        return $this->belongsToMany(Fitur::class, 'plans_fiturs', 'plan_id', 'fitur_id');
    }
}