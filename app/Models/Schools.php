<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $table = 'schools';
    protected $fillable = [
        'id',
        'sch_code',
        'sch_name',
        'email',
        'region',
        'gender',
        'students_enrollerd'
    ];
    public $timestamps = false;

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_school_selections', 'school_id', 'student_id');
    }

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
