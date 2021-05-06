<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Paket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_paket';
    protected $table = 'paket';
    protected $fillable = [
        'id_paket',
        'nama_paket',
        'jam',
        'harga',
    ];

    public function cart() {
        return $this->hasMany(Cart::class, 'id_paket');
    }
}
