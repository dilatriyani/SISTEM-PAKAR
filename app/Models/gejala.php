<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    public function data_penyakit()
    {
        return $this->belongsTo(data_penyakit::class);
    }
}
