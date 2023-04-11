<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_penyakit extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    public function data_gejala()
    {
        return $this->hasMany(gejala::class);
    }
}
