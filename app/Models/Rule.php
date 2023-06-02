<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rules';

    protected $fillable = [
    'kd_penyakit',
    'kd_gejala',
    'pertanyaan'

    ];

    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'kd_gejala', 'id');
    }

    public function data_penyakit()
    {
        return $this->belongsTo(data_penyakit::class, 'kd_penyakit', 'id');
    }
}
