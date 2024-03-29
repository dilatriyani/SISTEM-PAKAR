<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDiagnosa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "history_diagnosa";

    protected $fillable = ['nama', 'umur', 'alamat', 'penyakit'];
}
