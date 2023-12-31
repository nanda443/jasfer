<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Provider extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['nama'];

    public function fotografer()
    {
        return $this->hasMany(Fotografer::class);
    }

    public function kamera()
    {
        return $this->hasMany(Kamera::class);
    }

    public function toSearchableArray()
    {
        return [
            'nama'     => $this->nama,
        ];
    }
}
