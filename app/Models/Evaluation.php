<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $guarded = [];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function items()
    {
        return $this->hasMany(EvaluationItem::class);
    }

    public function getAverageRatingAttribute()
    {
        return $this->items->avg('rating');
    }
}
