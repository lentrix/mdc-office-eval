<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $guarded = [];

    public $timestamps = false;
    protected $appends = ['general_rating', 'evaluation_count'];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function getGeneralRatingAttribute()
    {
        $ratings = $this->evaluations->pluck('items')->flatten()->pluck('rating');
        return $ratings->avg();
    }

    public function generalItemRating($item)
    {
        $ratings = $this->evaluations->pluck('items')->flatten()->where('question_number', $item)->pluck('rating');
        return $ratings->avg();
    }

    public function comments() {
        return $this->evaluations->pluck('comments')->filter(function ($comment) {
            return !empty($comment);
        });
    }

    public function getEvaluationCountAttribute()
    {
        return $this->evaluations->count();
    }
}
