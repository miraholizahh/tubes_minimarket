<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class In extends Model
{
    use HasFactory;
    protected $table= 'incoming_products';

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_produk');
    }

    protected $fillable = [
        'tanggal',
        'id_produk',
        'jumlah',
        'biaya',
    ];
}
