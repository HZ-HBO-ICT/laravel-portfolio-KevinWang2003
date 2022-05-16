<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }

    public function assignCredits($false)
    {
        if ($false === true) {
            $average = Grade::select('best_grade')
                ->where('course_id', $this->id)
                ->sum('best_grade')
                ->divide(count('best_grade'));
            if ($average >= 5.5) {
                $this->passed_at = now();
            }
        }
    }
}
