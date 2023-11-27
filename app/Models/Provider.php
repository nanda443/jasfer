<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function fotografer()
    {
        return $this->hasMany(Fotografer::class);
    }
}
