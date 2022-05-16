<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Adds Result to the database and checks if the grade is higher than the previous
     */
    public function addResult($grade, Course $course)
    {
        if ($grade > $this->best_grade) {
            if ($this->best_grade < $this->lowest_passing_grade && $grade >= $this->lowest_passing_grade) {
                $course->assignCredits(true);
            }
            $this->best_grade = $grade;
            $this->save();
        }
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
