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

    public static function interpretation($averageScore) {
        if ($averageScore >= 3.26) {
            return 'Very Satisfactory';
        } elseif ($averageScore >= 2.51) {
            return 'Satisfactory';
        } elseif ($averageScore >= 1.76) {
            return 'Fair';
        } elseif ($averageScore >= 1.0) {
            return 'Poor';
        } else {
            return 'Inconclusive';
        }
    }
}
