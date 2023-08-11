<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollJob extends Model
{
    use HasFactory;

    public function payroll() {
        return $this->belongsTo(Payroll::class);
    }

    public function timeTable() {
        return $this->belongsTo(TimeTable::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
