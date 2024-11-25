<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'index_number',
        'date_of_birth',
        'first_name',
        'middle_name',
        'last_name',
        'phone_number',
        'email',
        'school_assigned_id',
    ];

    public function selectedSchools()
    {
        return $this->belongsToMany(Schools::class, 'student_school_selections', 'student_id', 'school_id');
    }

    public function assignedSchool()
    {
        return $this->belongsTo(Schools::class, 'school_assigned_id');
    }

    public function schools()
    {
        return $this->belongsToMany(Schools::class, 'application_school', 'application_id', 'school_id');
    }
    
}
