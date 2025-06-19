<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluationItem extends Model
{
    protected $guarded = [];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function getRatingAttribute($value)
    {
        return $value ?: 0; // Default to 0 if null
    }
}
