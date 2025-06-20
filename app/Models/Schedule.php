<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'class_id');
    }
}
