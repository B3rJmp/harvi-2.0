<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }
}
