<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Database\Factories\RecordBPtFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodpressure extends Model
{
    use HasFactory;
    protected $table = 'bloodpressure';
    protected $fillable = [
        'patient_id',
        'sbp',
        'dbp',
    ];

}
