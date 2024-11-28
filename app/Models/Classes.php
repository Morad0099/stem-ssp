<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['class_name', 'school_id', 'index_number_required'];

    public function school()
    {
        return $this->belongsTo(Schools::class);
    }
}
