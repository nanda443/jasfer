<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'provider_id', 'deskripsi', 'harga', 'foto'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
