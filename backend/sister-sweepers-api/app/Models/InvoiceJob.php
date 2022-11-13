<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceJob extends Model
{
    use HasFactory;

    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }

    public function timeTable() {
        return $this->belongsTo(TimeTable::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
