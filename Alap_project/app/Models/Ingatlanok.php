<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    use HasFactory;
    protected $primaryKey = "inagtlan_id";
    protected $fillable = [
        "kategoria",
        "leiras",
        "hirdetesDatuma",
        "tehermentes",
        "ar",
        "kepUrl"
    ];
}
