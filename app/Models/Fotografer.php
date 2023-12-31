<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Fotografer extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['nama', 'provider_id', 'deskripsi', 'harga', 'foto'];
    protected $with = ['provider'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function toSearchableArray()
    {
        return [
            'nama'     => $this->nama,
            'deskripsi' => $this->deskripsi
        ];
    }
}
