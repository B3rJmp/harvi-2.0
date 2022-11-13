<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;

    public function job() {
        return $this->belongsTo(Job::class);
    }

    public function action() {
        return $this->belongsTo(Action::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function payrollJobs() {
        return $this->hasMany(PayrollJob::class);
    }

    public function invoiceJobs() {
        return $this->hasMany(InvoiceJob::class);
    }
}
