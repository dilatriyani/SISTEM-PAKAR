<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;
    
    protected $table = "gejalas";

    protected $guarded = [' '];


    public function data_penyakit()
    {
        return $this->belongsTo("App\Models\data_penyakit", "kd_penyakit", "id");
    }
}
