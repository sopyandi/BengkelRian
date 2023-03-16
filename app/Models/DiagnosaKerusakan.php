<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosaKerusakan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }
    public function JenisKerusakan()
    {
        return $this->belongsTo(JenisKerusakan::class, 'idjeniskerusakan', 'id');
    }
}
