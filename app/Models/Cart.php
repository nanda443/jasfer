<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'fotografer_id', 'kamera_id'];
    protected $with = ['user', 'kamera', 'fotografer'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kamera()
    {
        return $this->belongsTo(Kamera::class);
    }

    public function fotografer()
    {
        return $this->belongsTo(Fotografer::class);
    }
}
