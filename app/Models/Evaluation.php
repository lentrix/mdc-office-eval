<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Evaluation extends Model
{
    use HasFactory;

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
