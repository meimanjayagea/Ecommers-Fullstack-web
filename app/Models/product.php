<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order_Item;

class product extends Model
{
    public $table = "products";
    use HasFactory;

    protected $fillable = [
        'id', 'category_id', 'kode', 'name', 'gambar_product','gambar_satu','gambar_dua','gambar_tiga','gambar_empat', 'harga', 'stock', 'sizi','varian', 'keterangan'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderitem()
    {
        return $this->hasMany(Order_Item::class);
    }
}