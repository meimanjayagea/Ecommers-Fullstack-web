<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order_Item;

class Order extends Model
{
    use HasFactory;
    
    public $table = "orders";

    protected $fillable = [
        'user_id', 'tanggal_order', 'status', 'kode_unik','jumlah_harga',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderitem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function product()
    {
        return $this->hasMany(product::class);
    }

}