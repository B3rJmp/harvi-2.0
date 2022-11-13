<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function jobStatus() {
        return $this->belongsTo(JobStatus::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
