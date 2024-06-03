<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;

    public function produk() {
        return $this->hasOne(Produk::class, 'detailproduk_id');
    }
}
