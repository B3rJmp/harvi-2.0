<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function payrolls() {
        return $this->hasMany(Payroll::class);
    }

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }

    public function timeTables() {
        return $this->hasMany(TimeTable::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
