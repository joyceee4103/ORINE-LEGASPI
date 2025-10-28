<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'day',
        'start_time',
        'end_time',
        'room'
    ];

    // Relationship to Classroom
    // In your Schedule.php model

        public function classroom()
        {
            return $this->belongsTo(Classroom::class);
        }
    
}