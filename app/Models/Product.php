<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_produk', 'id');
    }

    public function incoming_products()
    {
        return $this->hasMany(In::class, 'id_produk', 'id');
    }

    protected $fillable = [
        'code',
        'nama_produk',
        'harga_beli',
        'harga_jual',
        'stok',
        'kategori_id',
    ];
}
