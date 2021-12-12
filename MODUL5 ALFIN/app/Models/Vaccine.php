<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    // protected $table = "patients";
    // public $timestaps = false;

    protected $guarded = ['id'];

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}
