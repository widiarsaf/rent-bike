<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Cart;

class Sepeda extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sepeda';
    protected $table = 'sepeda';
    protected $fillable = [
        'unit_code',
        'kategori_id',
        'deskripsi',
        'foto_unit',
        'status',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class, 'id_sepeda');
    }

}
