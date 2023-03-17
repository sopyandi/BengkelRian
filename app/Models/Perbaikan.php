<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Mekanik()
    {
        return $this->belongsTo(Mekanik::class, 'idmekanik', 'id');
    }
    public function Kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'idkerusakan', 'id');
    }
}
