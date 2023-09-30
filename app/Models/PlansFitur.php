<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlansFitur extends Model
{
    use HasFactory;

    protected $table = 'plans_fiturs';

    protected $fillable = [
        'plan_id',
        'fitur_id',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function fitur(): BelongsTo
    {
        return $this->belongsTo(Fitur::class, 'fitur_id');
    }
}