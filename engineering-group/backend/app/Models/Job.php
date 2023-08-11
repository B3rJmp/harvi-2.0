<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function property() {
        return $this->belongsTo(Property::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function timeTables() {
        return $this->hasMany(TimeTable::class);
    }

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }

    public function payrollJobs() {
        return $this->hasMany(PayrollJob::class);
    }

    public function invoiceJobs() {
        return $this->hasMany(InvoiceJob::class);
    }
}
