<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mekanik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Member()
    {
        return $this->belongsTo(Member::class);
    }
}
