<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    public function detailproduk() {
        return $this->belongsTo(DetailProduk::class, 'detailproduk_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'produk_id');
    }

}
