<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    // protected $table = "vaccine";
    // public $timestaps = false;

    protected $guarded = [
        'id', 'vaccine_id',
    ];

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
